<?php

namespace App\Models;

use CodeIgniter\Model;

class ProsedurModel extends Model
{
    protected $table      = 'dokumen_prosedur';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['kode_dokumen', 'judul', 'tahun', 'file_pdf'];
}
