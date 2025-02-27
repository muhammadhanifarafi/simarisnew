<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'dokumen_materi_tws';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['kode_dokumen', 'judul', 'tahun', 'file_pdf'];
}
