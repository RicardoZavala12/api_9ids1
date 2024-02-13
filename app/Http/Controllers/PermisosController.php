<?php

namespace App\Http\Controllers;
use App\Models\Permiso;

use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function store(Request $req)
    {
        if($req->id != 0)
        {
            $permiso = Permiso::find($req->id);
        }
        else
        {
            $permiso= new Permiso();
        }

        //asignar los datos
        $permiso->fecha = $req->fecha;
        $permiso->estado = $req->estado;
        $permiso->motivo = $req->motivo;
        $permiso->observaciones = $req->observaciones;
        $permiso->id_profesor = $req->id_profesor;
        $permiso->save();
        return "Permiso Guardado";
    }

    public function delete(Request $req)
    {
        $profesor = Permiso::find($req->id);
        $profesor->delete();
        return "Permiso Eliminado";
    }
}
