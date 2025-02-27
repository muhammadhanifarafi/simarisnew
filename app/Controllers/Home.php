<?php

namespace App\Controllers;
use App\Models\InfoModel;
use App\Models\DokumenModel;
use App\Models\PedomanModel;
use App\Models\ProsedurModel;
use App\Models\MateriModel;
use App\Models\LaporanManajemenPenilaianModel;
use App\Models\DashboardModel;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function __construct()
    {
        $this->InfoModel = new InfoModel();
        $this->DokumenModel = new DokumenModel();
		$this->PedomanModel = new PedomanModel();
		$this->ProsedurModel = new ProsedurModel();
		$this->MateriModel = new MateriModel();
		$this->LaporanManajemenPenilaianModel = new LaporanManajemenPenilaianModel();
		$this->DashboardModel = new DashboardModel();
    }

	public function index()
	{
		$data = array_merge($this->data, [
			'title'         => 'Dashboard Page'
		]);
		return view('index', $data);
	}

	public function info()
	{
		$data = array_merge($this->data, [
			'title'         => 'Info',
			'simaris_content' => $this->InfoModel->get_simaris_content()
		]);
		return view('tentang/info', $data);
	}

	public function referensi()
	{
		$data = array_merge($this->data, [
			'title'         => 'Referensi',
			'simaris_content' => $this->InfoModel->get_simaris_content(),
			'dokumen' => $this->DokumenModel->findAll(),
			'pedoman' => $this->PedomanModel->findAll(),
			'prosedur' => $this->ProsedurModel->findAll(),
			'materi' => $this->MateriModel->findAll(),
		]);
		return view('referensi/referensi', $data);
	}

	public function pelaporanrisiko()
	{
		$data = array_merge($this->data, [
			'title'         => 'Referensi',
			'simaris_content' => $this->InfoModel->get_simaris_content(),
			'dokumen' => $this->DokumenModel->findAll(),
			'pedoman' => $this->PedomanModel->findAll(),
			'prosedur' => $this->ProsedurModel->findAll(),
			'laporanmanajemenpenilaian' => $this->LaporanManajemenPenilaianModel->findAll()
		]);
		return view('pelaporan/pelaporan', $data);
	}

	public function dashboard_korporat($id_unit_proyek = '', $id = '', $tahun = '', $unit = '')
    {
        $data = array_merge($this->data, [
			'title'      => 'Dashboard Korporat',
            'cari'       => "",
            'unitx'      => "",
            'title'      => "Dashboard",
            'subtitle'   =>	"Dashboard Risiko",
            'rows_no'    =>	0,
            'header_id'  => $id_unit_proyek,
            'id_unit'    => $id_unit_proyek,
            'ersk'       => $this->DashboardModel->ersk_dasboardRK(),
            'ersi'       => $this->DashboardModel->ersi_dasboardRK()
        ]);

 		return view('dashboard/dashboard_rk', $data);
    }

	public function data_monitoringkri_das()
    {
        $get_unit = "RK";
        
        // Get data from 'profil_unit' table using Query Builder
        $datalevel = $this->db->table('profil_unit')
            ->where('level', $get_unit)
            ->get()
            ->getResultArray();

        echo "<rows>";
        $nomor = 1;
        $no = 0;
        $no_rk = 0;
        $sasaran = "";
        $id_penyebab = "-";
        $id_peristiwa = "-";

        $query = $this->DashboardModel->data_kri_RK_dash();

        // Initialize mapping and current letter for penyebab
        $penyebab_map = [];
        $current_letter = 'a';

        foreach ($query->getResult() as $row) {
            $row_sasaran = 0;
            $row_peristiwa = 0;
            $row_peyebab = 0;
            $row_mitigasi = 0;
            $row_mitigasi2 = 0;
            $row_unit = 0;

            foreach ($query->getResult() as $row_check) {
                if ($row->id_sasaran_master == $row_check->id_sasaran_master) {
                    $row_sasaran++;
                }
                if ($row->id_sasaran == $row_check->id_sasaran) {
                    $row_peristiwa++;
                }
                if ($row->id_peristiwa == $row_check->id_peristiwa) {
                    $row_peyebab++;
                }
                if ($row->id_peristiwa == $row_check->id_peristiwa && $row->id_penyebab == $row_check->id_penyebab) {
                    $row_mitigasi++;
                    $current_letter++;
                }
                if ($row->id_mitigasi == $row_check->id_mitigasi) {
                    $row_unit++;
                }
            }

            if ($sasaran != $row->id_sasaran_master) {
                $sasaran = $row->id_sasaran_master;
                $no++;
            }

            if ($id_peristiwa != $row->id_peristiwa) {
                $no_rk++;
                $current_letter = 'a';
            }

            $hidden = '';
            $id_penyebab = $row->id_penyebab;
            $id_peristiwa = $row->id_peristiwa;

            // Get the letter for the current id_penyebab
            $penyebab_letter = isset($current_letter) ? $current_letter : '';

            // Make sure the count is at least 1, as per original logic
            $row_sasaran = max(1, $row_sasaran);
            $row_peristiwa = max(1, $row_peristiwa);
            $row_peyebab = max(2, $row_peyebab);
            $row_mitigasi = max(2, $row_mitigasi);

            // Set color based on kri color value
            switch ($row->warna_kri) {
                case 1:
                    $warnakri = 'Chartreuse';
                    break;
                case 2:
                    $warnakri = 'yellow';
                    break;
                case 3:
                    $warnakri = 'Tomato';
                    break;
                default:
                    $warnakri = '';
                    break;
            }

            // Output the row in XML format (or any structure as needed)
            echo "<row id='" . $nomor . "'>";
            echo "<cell style='font-size:10px' rowspan='$row_sasaran'>$no</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_peristiwa'>" . htmlspecialchars($row->nama_sasaran) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_peyebab'>" . htmlspecialchars($row->jenis_name) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_peyebab'>" . htmlspecialchars($row->nama_peristiwa) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_mitigasi'>" . htmlspecialchars($row->nama_penyebab) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_mitigasi'>" . htmlspecialchars($row->kri_nama) . "</cell>";
            echo "<cell style='font-size:10px' >" . htmlspecialchars("$row->unit_name") . "</cell>";
            echo "<cell style='font-size:10px; background-color:Chartreuse;' rowspan='$row_mitigasi'>" . htmlspecialchars($row->kri_aman) . "</cell>";
            echo "<cell style='font-size:10px; background-color:yellow;' rowspan='$row_mitigasi'>" . htmlspecialchars($row->kri_hatihati) . "</cell>";
            echo "<cell style='font-size:10px; background-color:Tomato;' rowspan='$row_mitigasi'>" . htmlspecialchars($row->kri_bahaya) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_mitigasi'>" . htmlspecialchars($row->nilai_kri) . "</cell>";
            echo "<cell style='font-size:10px' rowspan='$row_mitigasi'>" . htmlspecialchars($row->realisasi_kri) . "</cell>";
            echo "<cell style='font-size:10px; background-color:$warnakri;' rowspan='$row_mitigasi'></cell>";
            echo "</row>";

            $nomor++;
        }

        echo "</rows>";
    }
}
