<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $DBGroup = 'default'; // Gunakan default database group, atau bisa menggunakan 'db_simaris' jika Anda ingin menggunakan database berbeda
    protected $table = 'Profil_resiko_sasaran_header'; // Ganti dengan tabel yang sesuai

    // Fungsi untuk mengambil data ERSK Dashboard
    public function ersk_dasboardRK()
    {
        $sql = "SELECT 
                    COUNT(d.ersk_kat) as jml, d.ersk_kat,
                    CASE WHEN d.ersk_kat = '1' THEN 'EXTREAM'
                         WHEN d.ersk_kat = '2' THEN 'HIGH'
                         ELSE '' END AS 'kategori'
                FROM Profil_resiko_sasaran_header a
                INNER JOIN trans_request_sasaran b ON a.id = b.header_id
                INNER JOIN trans_request_sasaran_detail c ON c.trans_request_id = b.id
                INNER JOIN trans_request_sasaran_detail_sub_peristiwa d ON d.trans_request_detail_id = c.id
                WHERE a.id='266' AND d.ersk_kat IS NOT NULL
                GROUP BY d.ersk_kat";

        $query = $this->db->query($sql);
        $result = $query->getResultArray();

        $kat = '';
        $jml = '';

        if (is_array($result)) {
            foreach ($result as $value) {
                $kat .= "'" . $value['kategori'] . "',";
                $jml .= $value['jml'] . ",";
            }

            $kat = rtrim($kat, ',');
            $jml = rtrim($jml, ',');
        }

        return [
            'kat' => $kat,
            'jml' => $jml
        ];
    }

    // Fungsi untuk mengambil data ERSI Dashboard
    public function ersi_dasboardRK()
    {
        $sql = "SELECT 
                    COUNT(d.ersi_tw4_kat) as jml, d.ersi_tw4_kat,
                    CASE WHEN d.ersi_tw4_kat = '1' THEN 'EXTREAM'
                         WHEN d.ersi_tw4_kat = '2' THEN 'HIGH'
                         WHEN d.ersi_tw4_kat = '3' THEN 'MEDIUM'
                         ELSE 'LOW' END AS 'kategori'
                FROM Profil_resiko_sasaran_header a
                INNER JOIN trans_request_sasaran b ON a.id = b.header_id
                INNER JOIN trans_request_sasaran_detail c ON c.trans_request_id = b.id
                INNER JOIN trans_request_sasaran_detail_sub_peristiwa d ON d.trans_request_detail_id = c.id
                WHERE a.id='266' AND d.ersi_tw4_kat IS NOT NULL
                GROUP BY d.ersi_tw4_kat";

        $query = $this->db->query($sql);
        $result = $query->getResultArray();

        $kat = '';
        $jml = '';

        if (is_array($result)) {
            foreach ($result as $value) {
                $kat .= "'" . $value['kategori'] . "',";
                $jml .= $value['jml'] . ",";
            }

            $kat = rtrim($kat, ',');
            $jml = rtrim($jml, ',');
        }

        return [
            'kat' => $kat,
            'jml' => $jml
        ];
    }

    // Fungsi untuk mengecek ketercapaian
    public function check_ketercapaian_RKtw2_dash($id, $tahun)
    {
        $sql = "SELECT k.id
                FROM Profil_resiko_sasaran_header a
                INNER JOIN trans_request_sasaran b ON a.id = b.header_id
                LEFT JOIN trans_request_sasaran_detail c ON c.trans_request_id = b.id
                LEFT JOIN trans_request_sasaran_detail_sub_peristiwa d ON d.trans_request_detail_id = c.id
                LEFT JOIN trans_request_sasaran_detail_sub_penyebab e ON e.trans_request_detail_sub_id = d.id
                LEFT JOIN Profil_jenis f ON d.jenis_id = f.jenis_id
                LEFT JOIN Profil_pemilik j ON j.pemilik_id = d.pemilik_resiko
                LEFT JOIN trans_request_sasaran_detail_sub_mitigasi k ON k.trans_request_penyebab_id = e.id
                LEFT JOIN trans_request_sasaran_detail_sub_unittw2 l ON l.trans_request_mitigasi_id = k.id
                WHERE a.id = '266' AND CONVERT(VARCHAR, k.nama) != '' AND l.unit_id = 2
                GROUP BY k.id";

        $query = $this->db->query($sql);
        $result = $query->getResultArray();

        $t = 0;
        $j = 0;

        if (is_array($result)) {
            foreach ($result as $v) {
                $t++;
                $v_id = $v['id'];
                $ketercapaian = 0;

                $sql_check = "SELECT MIN(CAST(persentase_nama AS int)) AS persentase_nama
                              FROM trans_request_sasaran_detail_sub_unittw2
                              WHERE trans_request_mitigasi_id = '$v_id' AND unit_id = 2
                              AND CAST(persentase_nama AS int) != 0";

                $query_check = $this->db->query($sql_check);
                $result_check = $query_check->getResultArray();

                if (isset($result_check[0]['persentase_nama'])) {
                    $ketercapaian = $result_check[0]['persentase_nama'];
                }

                if ((int)$ketercapaian == 100) {
                    $j++;
                }
            }
        }

        return "$t";
    }

    public function data_kri_RK_dash()
    {
        // Membuat query SQL
        $sql = "SELECT
                    COALESCE(b.id, 0) AS id_sasaran_master,
                    b.id_kelompok,
                    COALESCE(c.id, 0) AS id_sasaran,
                    COALESCE(d.id, 0) AS id_peristiwa,
                    COALESCE(e.id, 0) AS id_penyebab,
                    COALESCE(h.id, 0) AS id_mitigasi,
                    COALESCE(j.id, 0) AS id_trans_unit,
                    COALESCE(o.id, 0) AS id_kri,
                    c.nama AS nama_sasaran,
                    d.nama AS nama_peristiwa,
                    e.nama AS nama_penyebab,
                    f.jenis_name,
                    k.unit_name,
                    o.realisasi as realisasi_kri,
                    o.nilai_kri,
                    q.kri_nama,
                    q.kri_aman,
                    q.kri_hatihati,
                    q.kri_bahaya,
                    CASE
                        WHEN o.kri_id=33 AND o.nilai_kri <= 4.9 THEN '1'
                        WHEN o.kri_id=33 AND o.nilai_kri >= 5 AND o.nilai_kri <= 5.9 THEN '2'
                        WHEN o.kri_id=33 AND o.nilai_kri >= 6 THEN '3'
                        WHEN o.kri_id=34 AND o.nilai_kri <= 60.9 THEN '1'
                        WHEN o.kri_id=34 AND o.nilai_kri >= 61 AND o.nilai_kri <= 75.9 THEN '2'
                        WHEN o.kri_id=34 AND o.nilai_kri >= 76 THEN '3'
                        WHEN o.kri_id=35 AND o.nilai_kri <= 0.9 THEN '1'
                        WHEN o.kri_id=35 AND o.nilai_kri = 1 AND o.nilai_kri <= 1.9 THEN '2'
                        WHEN o.kri_id=35 AND o.nilai_kri >= 2 THEN '3'
                        WHEN o.kri_id=36 AND o.nilai_kri >= 2.1 THEN '1'
                        WHEN o.kri_id=36 AND o.nilai_kri = 2 THEN '2'
                        WHEN o.kri_id=36 AND o.nilai_kri <= 1 THEN '3'
                        WHEN o.kri_id=37 AND o.nilai_kri <= 5 THEN '1'
                        WHEN o.kri_id=37 AND o.nilai_kri >= 5.1 AND o.nilai_kri <= 7.4 THEN '2'
                        WHEN o.kri_id=37 AND o.nilai_kri >= 7.5 THEN '3'
                        ELSE '4'
                    END AS warna_kri
                FROM Profil_resiko_sasaran_header a
                INNER JOIN trans_request_sasaran b ON a.id = b.header_id
                LEFT JOIN trans_request_sasaran_detail c ON c.trans_request_id = b.id
                LEFT JOIN trans_request_sasaran_detail_sub_peristiwa d ON d.trans_request_detail_id = c.id
                LEFT JOIN trans_request_sasaran_detail_sub_penyebab e ON e.trans_request_detail_sub_id = d.id
                LEFT JOIN Profil_jenis f ON d.jenis_id = f.jenis_id
                LEFT JOIN trans_request_sasaran_detail_sub_mitigasi h on e.id = h.trans_request_penyebab_id
                LEFT JOIN trans_request_sasaran_detail_sub_unit j on h.id = j.trans_request_mitigasi_id
                LEFT JOIN profil_unit k on j.unit_id = k.unit_id
                LEFT JOIN trans_request_monitoring_kri o on e.id = o.trans_penyebab_id
                LEFT JOIN Profil_KRI q ON q.kri_id = o.kri_id
                WHERE a.id = '266' AND q.kri_nama != ''
                ORDER BY b.id_kelompok, c.id, e.id, h.id";

        // Menjalankan query raw
        $query = $this->db->query($sql);

        // Mengembalikan hasil query
        return $query;
    }
}
