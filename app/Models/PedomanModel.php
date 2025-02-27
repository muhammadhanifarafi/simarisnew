<?php

namespace App\Models;

use CodeIgniter\Model;

class PedomanModel extends Model
{
    protected $table      = 'dokumen_pedoman';
    protected $primaryKey = 'id';

    protected $allowedFields = ['link_file_pedoman'];
}
