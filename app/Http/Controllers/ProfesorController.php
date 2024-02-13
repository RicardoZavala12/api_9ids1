<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Division;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function view(Request $req) 
    {
        if($req->id)
        {
            $profesor = Profesor::find($req->id);
        }
        else
        {
            $profesor = new Profesor();
        }

        $divisiones = Division::all();
        return view('profesor', compact('profesor'));
    }

    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores', compact('profesores'));
    }

    public function store(Request $req)
    {
        $divisiones = Division::all();
        if($req->id !=0)
        {
            $profesor = Profesor::find($req->id);
        }
        else
        {
            $profesor = new Profesor();
        }

        $profesor->num_empleado = $req->num_empleado;
        $profesor->nombre = $req->nombre;
        $profesor->num_horas = $req->num_horas;
        $profesor->division_id = $req->division_id;
        $profesor->inicio_contrato = $req->inicio_contrato;
        $profesor->fin_contrato = $req->fin_contrato;

        $profesor->save();

        
        return redirect()->route('profesores');

    }
    public function delete(Request $req)
    {
        $profesor = Profesor::find($req->id);
        $profesor->delete();
        return redirect()->route('profesores');
    }

    //Controllers for API's

    public function storeAPI(Request $req)
    {
        $divisiones = Division::all();
        if($req->id !=0)
        {
            $profesor = Profesor::find($req->id);
        }
        else
        {
            $profesor = new Profesor();
        }

        $profesor->num_empleado = $req->num_empleado;
        $profesor->nombre = $req->nombre;
        $profesor->num_horas = $req->num_horas;
        $profesor->division_id = $req->division_id;
        $profesor->inicio_contrato = $req->inicio_contrato;
        $profesor->fin_contrato = $req->fin_contrato;

        $profesor->save();

        
        return "Profesor Guardado";

    }
    public function deleteAPI(Request $req)
    {
        $profesor = Profesor::find($req->id);
        $profesor->delete();
        return "Profesor Eliminado";
    }

}
