<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterProfilPeristiwaModel extends Model
{
    protected $table = 'master_profil_peristiwa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'nama_peristiwa', 'user_insert', 'tgl_insert', 'user_update', 'tgl_update', 'ket', 'id_sasaran'
    ];
    public function getMasterProfilSasaran($MasterProfilSasaranID = false)
    {
        if ($MasterProfilSasaranID) {
            return $this->db->table('master_profil_peristiwa')
            ->where(['master_profil_peristiwa.id' => $MasterProfilSasaranID])
            ->get()->getRowArray();
        } else {
            return $this->db->table('master_profil_peristiwa')
            ->get()->getResultArray();
        }
    }

                 
    public function createMasterProfilSasaran($dataMasterProfilSasaran)
    {
        return $this->db->table('master_profil_peristiwa')->insert([
          'id'     	=> $dataMasterProfilSasaran['inputId'],
          'nama_peristiwa'     	=> $dataMasterProfilSasaran['inputNamaSasaran'],
          'user_insert'     	=> $dataMasterProfilSasaran['inputUserInsert'],
          'tgl_insert'     	=> $dataMasterProfilSasaran['inputTglInsert'],
          'user_update'     	=> $dataMasterProfilSasaran['inputUserUpdate'],
          'tgl_update'     	=> $dataMasterProfilSasaran['inputTglUpdate'],
          'ket'     	=> $dataMasterProfilSasaran['inputKet'], 
          'id_sasaran'     	=> $dataMasterProfilSasaran['InputIdSasaran'], 
        ]);
    }

    public function updateMasterProfilSasaran($dataMasterProfilSasaran)
    {
        return $this->db->table('master_profil_peristiwa')->update([
          'id'     	=> $dataMasterProfilSasaran['inputId'],
          'nama_peristiwa'     	=> $dataMasterProfilSasaran['inputNamaSasaran'],
          'user_insert'     	=> $dataMasterProfilSasaran['inputUserInsert'],
          'tgl_insert'     	=> $dataMasterProfilSasaran['inputTglInsert'],
          'user_update'     	=> $dataMasterProfilSasaran['inputUserUpdate'],
          'tgl_update'     	=> $dataMasterProfilSasaran['inputTglUpdate'],
          'ket'     	=> $dataMasterProfilSasaran['inputKet'], 
          'id_sasaran'     	=> $dataMasterProfilSasaran['InputIdSasaran'], 
            ], ['id' => $dataMasterProfilSasaran['inputMasterProfilSasaranID']]);
    }

    
    public function deleteMasterProfilSasaran($MasterProfilSasaranID)
	{
		return $this->db->table('Master_Profil_Peristiwa')->delete(['id' => $MasterProfilSasaranID]);
	}
}
