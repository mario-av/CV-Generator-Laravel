@extends('layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center;" class="no-print">
<h2>CV de {{ $Alumno->nombre }} {{ $Alumno->apellidos }}</h2>


    <div>
        <a href="{{ route('alumnos.index') }}" class="btn no-print" style="background-color: #555;">&laquo; Volver al Listado</a>

        <button onclick="window.print()" class="btn no-print" style="background-color: #007BFF; margin-left: 10px;">
            Descargar como PDF
        </button>
    </div>
</div>

<div class="cv-content-area" style="background-color: #f0f0f0; padding: 20px; border-radius: 8px; margin-top: 20px; border: 1px solid #000;">

    <div style="display: flex; align-items: flex-start; gap: 20px; border-bottom: 1px solid #ccc; padding-bottom: 20px;">
        @if ($Alumno->fotografia)
            <img src="{{ Storage::url($Alumno->fotografia) }}" alt="Foto de {{ $Alumno->nombre }}" width="150" style="border-radius: 8px;">
        @else
            <img src="[https://via.placeholder.com/150](https://via.placeholder.com/150)" alt="Sin foto" width="150" style="border-radius: 8px;">
        @endif
        
        <div>
            <h3 style="margin-top: 0;">{{ $Alumno->nombre }} {{ $Alumno->apellidos }}</h3>
            <p><strong>Correo:</strong> {{ $Alumno->correo }}</p>
            <p><strong>Teléfono:</strong> {{ $Alumno->teléfono }}</p>
            <p><strong>Fecha de Nac.:</strong> {{ \Carbon\Carbon::parse($Alumno->fecha_nacimiento)->format('d/m/Y') }}</p>
            <p><strong>Nota Media:</strong> {{ $Alumno->nota_media }}</p>
        </div>
    </div>

    <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
        <h4>Experiencia Laboral</h4>
        <p style="white-space: pre-wrap;">{{ $Alumno->experiencia }}</p>
    </div>

    <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
        <h4>Formación</h4>
        <p style="white-space: pre-wrap;">{{ $Alumno->formación }}</p>
    </div>

    <div style="padding: 20px 0 0;">
        <h4>Habilidades</h4>
        <p style="white-space: pre-wrap;">{{ $Alumno->habilidades }}</p>
    </div>
    
</div>

<div class="no-print" style="margin-top: 20px; text-align: right;">
    
    <a href="{{ route('alumnos.edit', $Alumno->id) }}" class="btn" style="background-color: #FFC107; color: #333;">Editar este CV</a>
        
        <form action="{{ route('alumnos.destroy', $Alumno->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este CV? ¡No se puede deshacer!');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="background-color: #DC3545;">Eliminar</button>
        </form>
</div>


@endsection