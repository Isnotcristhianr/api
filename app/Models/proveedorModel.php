<?php

namespace App\Models;
use CodeIgniter\Model;

class proveedorModel extends Model
{

    protected $DBGroup = 'default';

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->db = $db;
    }

    public function obtenerProveedor()
    {
        $query = $this->db->query("SELECT * FROM tbl_proveedor");

        return $query->getResultArray();
    }

}