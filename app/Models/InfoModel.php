<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    public function get_simaris_content()
    {
        return $this->db->table('info_app_simaris')->get()->getResultArray();
    } 
}
