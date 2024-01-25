<?php

namespace App\Controllers;
use App\Models\proveedorModel;

class proveedorController extends BaseController
{

  /*   public function __construct()
    {
        parent::__construct();
        $modelo = new proveedorModel();
        $this -> modelo = $modelo;
        
    } */

    public function index()
    {
        $modelo = new proveedorModel();
        $datos = $modelo->obtenerProveedor();
        
        return $this-> response->setJSON($datos);
    }

    public function mejoresVendedores()
    {
        $modelo = new proveedorModel();
        $datos = $modelo->mejoresVendedores();
        
        return $this-> response->setJSON($datos);
    }


}
