<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Padre;
use App\Models\Alumno;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Entidad para Padre
        $padre = new Padre();
        $padre->name = $request->input('padre.name');
        $padre->surname = $request->input('padre.surname');
        $padre->name_ar = $request->input('padre.name_ar');
        $padre->surname_ar = $request->input('padre.surname_ar');
        $padre->dni = $request->input('padre.dni');
        $padre->email = $request->input('padre.email');
        $padre->telefono = $request->input('padre.telefono');
        $padre->address = $request->input('padre.address');
        $padre->city = $request->input('padre.city');
        $padre->postalcode = $request->input('padre.postalcode');
        $padre->matricula = 0;
        $padre->descuento = 0;
        $padre->save();

        $jsonArray = json_encode($request->input('alumnos'));
        $alumnosArray = json_decode($jsonArray);

        foreach($alumnosArray as $item)
        {
            // Entidad para alumno Alumno
            $alumno = new Alumno();
            $alumno->name = $item->name;
            $alumno->surname = $item->surname;
            $alumno->name_ar = $item->name_ar;
            $alumno->surname_ar = $item->surname_ar;
            $alumno->birthday = $item->birthday;
            $alumno->padres_id =$padre->id;
            $alumno->grupos_id = null;
            $alumno->profesores_id = null;
            $alumno->save();
        }

        return response($request, 200);
    }
}
