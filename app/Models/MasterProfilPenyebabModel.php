<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterProfilPenyebabModel extends Model
{
    protected $table = 'master_profil_penyebab';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'nama_penyebab', 'user_insert', 'tgl_insert', 'user_update', 'tgl_update', 'ket', 'id_sasaran', 'id_peristiwa'
    ];
}
