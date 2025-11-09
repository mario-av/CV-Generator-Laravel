<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;                            
use Illuminate\Support\Facades\Storage;       

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curriculums = Curriculum::latest()->get();

        return view('curriculums.index', compact('curriculums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curriculums.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('images', 'public');

        
            $data['profile_image'] = $path;
        }

        Curriculum::create($data);

        return redirect()->route('curriculums.index')
                        ->with('success', '¡Curriculum creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Curriculum $curriculum)
    {
        return view('curriculums.show', compact('curriculum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculum $curriculum)
    {

        return view('curriculums.edit', compact('curriculum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
