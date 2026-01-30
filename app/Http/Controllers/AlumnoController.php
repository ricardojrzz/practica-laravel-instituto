<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = \App\Models\Alumno::all();

        // Asegúrate de que diga "return"
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Esto le dice a Laravel que cargue la vista que creamos
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos los datos que vienen del formulario
        $request->validate([
            'nombre'   => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email'    => 'required|email|unique:alumnos,email',
        ]);

        // Guardamos en la base de datos
        \App\Models\Alumno::create($request->all());

        // Redirigimos a la tabla con un mensaje de éxito
        return redirect()->route('alumnos.index')->with('success', '¡Alumno creado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Alumno $alumno)
    {
        // Mostramos el formulario de edición con los datos del alumno
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Alumno $alumno)
    {
        // Validamos los nuevos datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:alumnos,email,' . $alumno->id,
        ]);

        // Actualizamos el registro
        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Alumno $alumno)
    {
        // Borramos el alumno de la base de datos
        $alumno->delete();

        // Volvemos a la lista con un mensaje de éxito
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }
}
