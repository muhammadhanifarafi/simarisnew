<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterProfilSasaranModel extends Model
{
    protected $table = 'master_profil_sasaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'nama_sasaran', 'user_insert', 'tgl_insert', 'user_update', 'tgl_update', 'ket'
    ];
    public function getMasterProfilSasaran($MasterProfilSasaranID = false)
    {
        if ($MasterProfilSasaranID) {
            return $this->db->table('master_profil_sasaran')
            ->where(['master_profil_sasaran.id' => $MasterProfilSasaranID])
            ->get()->getRowArray();
        } else {
            return $this->db->table('master_profil_sasaran')
            ->get()->getResultArray();
        }
    }

                 
    public function createMasterProfilSasaran($dataMasterProfilSasaran)
    {
        return $this->db->table('master_profil_sasaran')->insert([
          'id'     	=> $dataMasterProfilSasaran['inputId'],
          'nama_sasaran'     	=> $dataMasterProfilSasaran['inputNamaSasaran'],
          'user_insert'     	=> $dataMasterProfilSasaran['inputUserInsert'],
          'tgl_insert'     	=> $dataMasterProfilSasaran['inputTglInsert'],
          'user_update'     	=> $dataMasterProfilSasaran['inputUserUpdate'],
          'tgl_update'     	=> $dataMasterProfilSasaran['inputTglUpdate'],
          'ket'     	=> $dataMasterProfilSasaran['inputKet'], 
        ]);
    }

    public function updateMasterProfilSasaran($dataMasterProfilSasaran)
    {
        return $this->db->table('master_profil_sasaran')->update([
          'id'     	=> $dataMasterProfilSasaran['inputId'],
          'nama_sasaran'     	=> $dataMasterProfilSasaran['inputNamaSasaran'],
          'user_insert'     	=> $dataMasterProfilSasaran['inputUserInsert'],
          'tgl_insert'     	=> $dataMasterProfilSasaran['inputTglInsert'],
          'user_update'     	=> $dataMasterProfilSasaran['inputUserUpdate'],
          'tgl_update'     	=> $dataMasterProfilSasaran['inputTglUpdate'],
          'ket'     	=> $dataMasterProfilSasaran['inputKet'], 
            ], ['id' => $dataMasterProfilSasaran['inputMasterProfilSasaranID']]);
    }

    
    public function deleteMasterProfilSasaran($MasterProfilSasaranID)
	{
		return $this->db->table('master_profil_sasaran')->delete(['id' => $MasterProfilSasaranID]);
	}
}
