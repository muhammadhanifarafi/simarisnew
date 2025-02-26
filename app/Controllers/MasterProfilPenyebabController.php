<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasterProfilSasaranModel;
use App\Models\MasterProfilPeristiwaModel;
use App\Models\MasterProfilPenyebabModel;

class MasterProfilPenyebabController extends BaseController
{
    protected $MasterProfilPeristiwaModel;

    public function __construct()
    {
        $this->MasterProfilPenyebabModel = new MasterProfilPenyebabModel();
        $this->MasterProfilPeristiwaModel = new MasterProfilPeristiwaModel();
        $this->MasterProfilSasaranModel = new MasterProfilSasaranModel();
    }

	// Menampilkan halaman utama (index) dengan data Master Profil Sasaran
    public function index()
    {
        $data = array_merge($this->data, [
			'title'             => 'Menu Management',
			'MenuCategories'	=> $this->menuModel->getMenuCategory(),
			'Menus'				=> $this->menuModel->getMenu(),
			'Submenus'			=> $this->menuModel->getSubmenu(),
			'validation'		=> $this->validation,
            'sasaran'           => $this->MasterProfilSasaranModel->findAll(),
            'peristiwa'           => $this->MasterProfilPeristiwaModel->findAll()
		]);

        return view('master/kamus_risiko/master_profil_penyebab', $data); // Menampilkan view dengan DataTable dan modal
    }

    // Method untuk mengambil data dalam format JSON (untuk DataTable)
    public function getData()
    {
        // Mengambil parameter untuk pagination
        $length = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $search = $this->request->getVar('search')['value']; // Jika ada filter pencarian
    
        // Ambil data berdasarkan pagination dan pencarian
        $data = $this->MasterProfilPenyebabModel->select('master_profil_penyebab.id, master_profil_penyebab.nama_penyebab, master_profil_penyebab.ket, master_profil_penyebab.id_sasaran, master_profil_sasaran.nama_sasaran, master_profil_peristiwa.id as id_peristiwa, master_profil_peristiwa.nama_peristiwa')
            ->join('master_profil_sasaran', 'master_profil_penyebab.id_sasaran = master_profil_sasaran.id')
            ->join('master_profil_peristiwa', 'master_profil_penyebab.id_peristiwa = master_profil_peristiwa.id')
            ->groupStart()
                ->like('master_profil_penyebab.nama_penyebab', $search)
                ->orLike('master_profil_sasaran.nama_sasaran', $search)
                ->orLike('master_profil_peristiwa.nama_peristiwa', $search)
            ->groupEnd()
            ->orderBy('master_profil_penyebab.id', 'desc')
            ->findAll($length, $start);
        
        // Hitung total records tanpa filter
        $totalRecords = $this->MasterProfilPenyebabModel->selectCount('master_profil_penyebab.id')
            ->join('master_profil_sasaran', 'master_profil_penyebab.id_sasaran = master_profil_sasaran.id')
            ->join('master_profil_peristiwa', 'master_profil_penyebab.id_peristiwa = master_profil_peristiwa.id')
            ->countAllResults();
    
        // Hitung total records setelah filter pencarian
        $totalFiltered = $this->MasterProfilPenyebabModel->selectCount('master_profil_penyebab.id')
            ->join('master_profil_sasaran', 'master_profil_penyebab.id_sasaran = master_profil_sasaran.id')
            ->join('master_profil_peristiwa', 'master_profil_penyebab.id_peristiwa = master_profil_peristiwa.id')
            ->groupStart()
                ->like('master_profil_penyebab.nama_penyebab', $search)
                ->orLike('master_profil_sasaran.nama_sasaran', $search)
                ->orLike('master_profil_peristiwa.nama_peristiwa', $search)
            ->groupEnd()
            ->countAllResults();
    
        // Menyiapkan data yang akan dikirim ke view
        $result = [];
        foreach ($data as $item) {
            $result[] = [
                'id' => $item['id'],
                'nama_penyebab' => $item['nama_penyebab'],
                'ket' => $item['ket'],
                'nama_sasaran' => $item['nama_sasaran'],
                'nama_peristiwa' => $item['nama_peristiwa'],
                'action' => '<button class="btn btn-warning btn-sm edit-btn" data-id="'.$item['id'].'">Edit</button> 
                             <button class="btn btn-danger btn-sm delete-btn" data-id="'.$item['id'].'">Delete</button>'
            ];
        }
    
        // Kirim respons dalam format JSON yang benar
        return $this->response->setJSON([
            "draw" => $this->request->getVar('draw'),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalFiltered,
            "data" => $result
        ]);
    }      

    // Method untuk menyimpan data baru
    public function saveData()
    {
        $id = $this->request->getPost('id'); // Ambil ID jika ada
        $data = [
            'nama_penyebab' => $this->request->getPost('nama_penyebab'),
            'user_insert'  => $this->data['user']['id'], // Pastikan user ada di session
            'tgl_insert'   => date('Y-m-d H:i:s'),
            'ket'          => $this->request->getPost('ket'),
            'id_sasaran'   => $this->request->getPost('id_sasaran'),
            'id_peristiwa'  => $this->request->getPost('id_peristiwa'),
        ];

        if ($id) {
            // Update data jika ID ada
            $this->MasterProfilPenyebabModel->update($id, $data);
            return $this->response->setJSON(['status' => 'success']);
        }
    
        // Insert data baru jika ID tidak ada
        if ($this->MasterProfilPenyebabModel->save($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }  
    
    public function editData($id)
    {
        // Ambil data berdasarkan ID
        $data = $this->MasterProfilPenyebabModel->find($id);

        if ($data) {
            // Mengembalikan data untuk diedit dalam format JSON
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data not found'
            ]);
        }
    }

    // Method untuk memperbarui data
    public function updateData()
    {
        $data = [
            'nama_peristiwa' => $this->request->getPost('nama_peristiwa'),
            'user_insert' => $this->request->getPost('user_insert'),
            'tgl_insert' => $this->request->getPost('tgl_insert'),
            'user_update' => $this->request->getPost('user_update'),
            'tgl_update' => $this->request->getPost('tgl_update'),
            'ket' => $this->request->getPost('ket'),
            'id_sasaran' => $this->request->getPost('id_sasaran'),
            'id_peristiwa' => $this->request->getPost('id_peristiwa'),
        ];

        $id = $this->request->getPost('id');
        if ($this->MasterProfilPenyebabModel->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }

    // Method untuk menghapus data
    public function deleteData($id)
    {
        if ($this->MasterProfilPenyebabModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
