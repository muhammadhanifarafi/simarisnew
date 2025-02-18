<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasterProfilSasaranModel;

class MasterProfilSasaranController extends BaseController
{
    protected $MasterProfilSasaranModel;

    public function __construct()
    {
        $this->MasterProfilSasaranModel = new MasterProfilSasaranModel();
    }

	// Menampilkan halaman utama (index) dengan data Master Profil Sasaran
    public function index()
    {
        $data = array_merge($this->data, [
			'title'         => 'Menu Management',
			'MenuCategories'	=> $this->menuModel->getMenuCategory(),
			'Menus'				=> $this->menuModel->getMenu(),
			'Submenus'			=> $this->menuModel->getSubmenu(),
			'validation'		=> $this->validation
		]);

        return view('master/kamus_risiko/master_profil_sasaran', $data); // Menampilkan view dengan DataTable dan modal
    }

    // Method untuk mengambil data dalam format JSON (untuk DataTable)
    public function getData()
    {
        // Mengambil parameter untuk pagination
        $length = $this->request->getVar('length');
        $start = $this->request->getVar('start');
        $search = $this->request->getVar('search')['value']; // Jika ada filter pencarian
    
        // Ambil data berdasarkan pagination dan pencarian
        $data = $this->MasterProfilSasaranModel->like('nama_sasaran', $search)
                                               ->findAll($length, $start);
        
        // Hitung total records tanpa filter
        $totalRecords = $this->MasterProfilSasaranModel->countAllResults();
    
        // Hitung total records setelah filter pencarian
        $totalFiltered = $this->MasterProfilSasaranModel->like('nama_sasaran', $search)
                                                       ->countAllResults();
    
        // Menyiapkan data yang akan dikirim ke view
        $result = [];
        foreach ($data as $item) {
            $result[] = [
                'id' => $item['id'],
                'nama_sasaran' => $item['nama_sasaran'],
                'ket' => $item['ket'],
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
            'nama_sasaran' => $this->request->getPost('nama_sasaran'),
            'user_insert'  => $this->data['user']['id'], // Pastikan user ada di session
            'tgl_insert'   => date('Y-m-d H:i:s'),
            'ket'          => $this->request->getPost('ket'),
        ];
    
        if ($id) {
            // Update data jika ID ada
            $this->MasterProfilSasaranModel->update($id, $data);
            return $this->response->setJSON(['status' => 'success']);
        }
    
        // Insert data baru jika ID tidak ada
        if ($this->MasterProfilSasaranModel->save($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }  
    
    public function editData($id)
    {
        // Ambil data berdasarkan ID
        $data = $this->MasterProfilSasaranModel->find($id);

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
            'nama_sasaran' => $this->request->getPost('nama_sasaran'),
            'user_insert' => $this->request->getPost('user_insert'),
            'tgl_insert' => $this->request->getPost('tgl_insert'),
            'user_update' => $this->request->getPost('user_update'),
            'tgl_update' => $this->request->getPost('tgl_update'),
            'ket' => $this->request->getPost('ket'),
        ];

        $id = $this->request->getPost('id');
        if ($this->MasterProfilSasaranModel->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }

    // Method untuk menghapus data
    public function deleteData($id)
    {
        if ($this->MasterProfilSasaranModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error']);
        }
    }
}
