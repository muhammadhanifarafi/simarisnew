<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table      = 'dokumen_manajemen_risiko';
    protected $primaryKey = 'id';

    protected $allowedFields = ['kode_dokumen', 'judul', 'tahun', 'file_pdf'];
}
