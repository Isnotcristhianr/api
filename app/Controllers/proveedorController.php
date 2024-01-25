<?php

namespace App\Controllers;
use App\Models\proveedorModel;

class proveedorController extends BaseController
{
    public function index()
    {
        $modelo = new proveedorModel();
        $datos = $modelo->obtenerProveedor();
        
        return $this-> response->setJSON($datos);
    }


}
