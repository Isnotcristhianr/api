<?php

namespace App\Models;
use CodeIgniter\Model;

class proveedorModel extends Model
{

    protected $DBGroup = 'default';

    public function obtenerProveedor()
    {
        $db = \Config\Database::connect();

        $query = $db->query('SELECT * FROM tbl_proveedor');

        return $query->getResultArray();
    }

}