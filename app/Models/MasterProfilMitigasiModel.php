<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterProfilMitigasiModel extends Model
{
    protected $table = 'master_profil_mitigasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_mitigasi',
        'user_insert',
        'tgl_insert',
        'user_update',
        'tgl_update',
        'ket',
        'id_sasaran',
        'id_peristiwa',
        'id_penyebab',
    ];
}
