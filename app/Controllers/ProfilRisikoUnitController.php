<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MasterProfilSasaranModel;
use App\Models\MasterProfilPeristiwaModel;
use App\Models\MasterProfilPenyebabModel;
use App\Models\MasterProfilMitigasiModel;

class ProfilRisikoUnitController extends BaseController
{
    public function __construct()
    {
        $this->MasterProfilMitigasiModel = new MasterProfilMitigasiModel();
        $this->MasterProfilPenyebabModel = new MasterProfilPenyebabModel();
        $this->MasterProfilPeristiwaModel = new MasterProfilPeristiwaModel();
        $this->MasterProfilSasaranModel = new MasterProfilSasaranModel();
    }

    public function index()
    {
        $data = array_merge($this->data, [
			'title'             => 'Profil Risiko Unit',
			'MenuCategories'	=> $this->menuModel->getMenuCategory(),
			'Menus'				=> $this->menuModel->getMenu(),
			'Submenus'			=> $this->menuModel->getSubmenu(),
			'validation'		=> $this->validation,
		]);

        return view('penilaian_risiko/risiko_unit/index', $data);
    }
}