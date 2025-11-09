<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;                            
use Illuminate\Support\Facades\Storage;       

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Alumnos = Alumno::latest()->get();

        return view('Alumnos.index', compact('Alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Alumnos.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('fotografia')) {
            $path = $request->file('fotografia')->store('images', 'public');

        
            $data['fotografia'] = $path;
        }

        Alumno::create($data);

        return redirect()->route('Alumnos.index')
                        ->with('success', '¡Alumno creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $Alumno)
    {
        return view('Alumnos.show', compact('Alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $Alumno)
    {

        return view('Alumnos.edit', compact('Alumno'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Alumno $Alumno)
    {
        
        $data = $request->all();

   
        if ($request->hasFile('fotografia')) {

           
            if ($Alumno->fotografia) {
                Storage::disk('public')->delete($Alumno->fotografia);
            }

            $path = $request->file('fotografia')->store('images', 'public');

            
            $data['fotografia'] = $path;
        }

     
        $Alumno->update($data);

       
        return redirect()->route('Alumnos.index')
                        ->with('success', '¡Alumno actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $Alumno)
    {
        
        if ($Alumno->fotografia) {
            Storage::disk('public')->delete($Alumno->fotografia);
        }

        
        $Alumno->delete();

        
        return redirect()->route('Alumnos.index')
                        ->with('success', '¡Alumno eliminado con éxito!');
    }
}
