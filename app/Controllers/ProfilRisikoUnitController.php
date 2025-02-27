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

    public function data_penilaian_unit_admin($level = '', $unit = '', $periode = '')
    {
        echo "<rows>";

        $nomor = 1;
        $data_sasaran = $this->Profil_model25->data_list_sasaran_unit($level, $unit, $periode);

        //$data["resiko"]=$this->Profil_model->register_resiko_header_id($id);

        foreach ($data_sasaran as $list_sasaran) {
           
        
            
            $url_tambah_Sasaran             = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil/tambah_sasaran/" . $list_sasaran->code . "'><span class='blue'>1. Sasaran <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
           
            $url_penilaian_status           = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-yellow btn-default' href='" . base_url() . "profil_RU25/register_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='yellow'>Penilaian <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_penilaian                  = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/register_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Penilaian <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            
            $url_mitigasi_status            = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-yellow btn-default' href='" . base_url() . "profil_RU25/mitigasi_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Mitigasi <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_mitigasi                   = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/mitigasi_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Mitigasi <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_mitigasi_hide              = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default'disabled href='" . base_url() . "profil_RU25/mitigasi_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Mitigasi <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            
           
            $url_register                   = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/risk_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Risk Register <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_register_hide              = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' disabled href='" . base_url() . "profil_RU25/risk_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Risk Register <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_register_status            = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-yellow btn-default' href='" . base_url() . "profil_RU25/risk_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Risk Register <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
          
            $url_history                    = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' href='" . base_url() . "profil_RU25/history_risiko_penilain_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i>Penilaian</span></a>]]>";
            $url_historymitigasi            = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' href='" . base_url() . "profil_RU25/history_risiko_mitigasi_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i>Mitigasi</span></a>]]>";
            $url_historyrisk                = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' href='" . base_url() . "profil_RU25/history_risiko_risk_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i>History</span></a>]]>";
           
            $url_history_hide               = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' disabled href='" . base_url() . "profil_RU25/history_risiko_penilain_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i> Pinilaian</span></a>]]>";
            $url_historymitigasi_hide       = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' disabled href='" . base_url() . "profil_RU25/history_risiko_mitigasi_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i> Mitigasi</span></a>]]>";
            $url_historyrisk_hide           = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' target='_blank' disabled href='" . base_url() . "profil_RU25/history_risiko_risk_RU/" . $list_sasaran->id . "'><span class='blue'><i class='ace-icon fa fa-folder-open bigger-120'></i> History</span></a>]]>";
           

            $url_monitoring                 = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/monitoring_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Monitoring <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            $url_monitoring_hide            = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' disabled href='" . base_url() . "profil_RU25/monitoring_risiko_unit/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Monitoring <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
            

            
            $url_penilian_date              = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' disabled ><span class='blue'>Penilaian " . substr($list_sasaran->profil_approve_kadiv_date_new,0,11) . "</span></a>]]>";
            $url_mitigasi_date              = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' disabled ><span class='blue'>Mitigasi " . substr($list_sasaran->mitigasi_approve_kadiv_date_new,0,11) . "</span></a>]]>";
            $url_risk_date                  = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' disabled ><span class='blue'>Risk Register " . substr($list_sasaran->risk_approve_kadiv_date_new,0,11) . " </span></a>]]>";
          
            $url_toprisk                    = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/top_risk_RU/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>Top Risk<i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
           

               $url_kri                  = "<![CDATA[<a style='font-size:10px' class='btn btn-sm btn-white btn-default' href='" . base_url() . "profil_RU25/monitoring_kri/" . $list_sasaran->id . "/" . $list_sasaran->code . "'><span class='blue'>KRI <i class='ace-icon fa fa-folder-open bigger-120'></i></span></a>]]>";
           
           
            if($list_sasaran->risk_approve_kadiv != 1 && $list_sasaran->id_revisi_risk != 1){
                $persetujuan_unit = "<span style='color: red;'>Risk Register Belum di APPROVE Risk Owner</span>";
             } else if($list_sasaran->staff_dpkmr != 1 && $list_sasaran->risk_approve_kadiv == 1 && $list_sasaran->send_mail_dpkmr != 1 && $list_sasaran->id_revisi_risk != 1){
                $persetujuan_unit = "<span style='color: red;'>Belum Dilakukan Verifikasi (DPKMR) </span>";
             } 

            else if($list_sasaran->staff_dpkmr == 1 && $list_sasaran->risk_approve != 1  && $list_sasaran->id_revisi_risk != 1){
                $persetujuan_unit = "<span style='color: blue;'>PIC DPKMR Sudah Send to KABAG </span>";
                
             } else if($list_sasaran->staff_dpkmr == 1 && $list_sasaran->risk_approve != 1 && $list_sasaran->id_revisi_risk == 1){
                $persetujuan_unit = "<span style='color: blue;'>PIC DPKMR Sudah Send to KABAG (catatan ulang atas revisi) </span>";
                
             } else if($list_sasaran->staff_dpkmr == 1 && $list_sasaran->risk_approve == 1 && $list_sasaran->send_mail_dpkmr != 1 && $list_sasaran->risk_approve_kadivdpkmr != 1 ){
                $persetujuan_unit = "<span style='color: blue;'>KABAG DPKMR Sudah Send to KADIV </span>";

             } else if($list_sasaran->send_catatan == 1 && $list_sasaran->id_revisi_risk == 1 && $list_sasaran->risk_approve_kadiv != 1 ){
                $persetujuan_unit = "<span style='color: blue;'>Risk Owner Melakukan Revisi </span>";
             }
             else if($list_sasaran->staff_dpkmr != 1 && $list_sasaran->id_revisi_risk == 1 && $list_sasaran->risk_approve_kadiv == 1 && $list_sasaran->risk_approve_kadivdpkmr != 1){
                $persetujuan_unit = "<span style='color: blue;'>Sudah Melalukan Revisi Atas Catatan DPKMR </span>";
             }
             
             else if($list_sasaran->risk_approve == 1 && $list_sasaran->send_mail_dpkmr == 1  ){
                $persetujuan_unit = "<span style='color: blue;'>Email Terkirim</span>";
             }
             else if($list_sasaran->risk_approve_kadivdpkmr == 1  ){
                $persetujuan_unit = "<span style='color: blue;'>Risk Register Sudah DiVerifikasi DPKMR</span>";
             }
             else {
          
            $persetujuan_unit = "";
            }
           
            //cek apakah nama potensial kosong
            $perjalanan = '';
            $perjalananc = '';

            if ($list_sasaran->risk_approve_staff == 1) {

                $perjalanan = "Menunggu Persetujuan AVP Verifikator yang ditunjuk";
            }
            if ($list_sasaran->risk_approve_kabag == 1) {
                $perjalanan = "Menunggu Persetujuan Kepala Unit";
            }


            if ($list_sasaran->risk_approve_kadiv == 1) {
                $perjalanan = "Disetujui";
                // $style="style='background-color:yellow'";

            }



            echo '<row id="' . $list_sasaran->id . '">';
            echo "<cell style='font-size:10px' >" . htmlspecialchars($nomor) . "</cell>";
            echo "<cell style='font-size:10px' >" . htmlspecialchars($list_sasaran->level_nama) . "</cell>";
            echo "<cell style='font-size:10px'>" . htmlspecialchars($list_sasaran->unit_name) . "</cell>";
            echo "<cell style='font-size:10px'>" . htmlspecialchars($list_sasaran->acuan) . "</cell>";
            

            echo "<cell style='font-size:10px' >" . htmlspecialchars($perjalanan) . "</cell>";

            if($list_sasaran->approve_kadiv == 1){
                echo "<cell style='font-size:10px' >$url_penilaian_status</cell>";
            }else{
                echo "<cell style='font-size:10px'> $url_penilaian</cell>";
            }

            if($list_sasaran->profil_approve_staff == 1){
                if($list_sasaran->mitigiasi_approve_kadiv == 1){
                    echo "<cell style='font-size:10px' >$url_mitigasi_status</cell>";
                }else{
                    echo "<cell style='font-size:10px' >$url_mitigasi</cell>";
                }
    
            }else{
                echo "<cell style='font-size:10px' >$url_mitigasi_hide</cell>";
            }
           
            
           
            if($list_sasaran->mitigasi_approve_staff == 1 ){
                if($list_sasaran->mitigiasi_approve_kadiv == 1){
                    echo "<cell style='font-size:10px' > $url_register_status  </cell>";
                }else{
                    echo "<cell style='font-size:10px' >$url_register</cell>";
                }
                }else{
                    echo "<cell style='font-size:10px' > $url_register_hide  </cell>";
                }

                echo "<cell style='font-size:10px' >$url_toprisk</cell>";
                echo "<cell style='font-size:10px' >$url_kri</cell>";
                
                
            if($list_sasaran->id_revisi_penilian == 1 ||$list_sasaran->id_revisi_mitigasi == 1 || $list_sasaran->id_revisi_risk == 1){
            echo "<cell style='font-size:10px' >$url_historyrisk </cell>";
            }else{
            echo "<cell style='font-size:10px' >$url_historyrisk_hide</cell>";
                }

            
            echo "<cell style='font-size:10px' >  $url_risk_date</cell>";
            echo "<cell style='font-size:10px' > " . htmlspecialchars($persetujuan_unit) . " </cell>";
            if($list_sasaran->risk_approve_kadiv == 1 ){
                echo "<cell style='font-size:10px' > $url_monitoring  </cell>";
            }else{
                echo "<cell style='font-size:10px' > $url_monitoring_hide  </cell>";
            }
            //echo "<cell>$url_del</cell>";
            echo "</row>";
            $nomor++;
        }
        echo "</rows>";
    }

}