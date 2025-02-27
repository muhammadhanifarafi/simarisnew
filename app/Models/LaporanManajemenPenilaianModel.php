<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanManajemenPenilaianModel extends Model
{
    protected $table      = 'laporan_manajemen_dan_penilaian';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['kode_dokumen', 'judul', 'tahun', 'file_pdf', 'jenis'];
}
