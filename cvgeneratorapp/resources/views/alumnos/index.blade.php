@extends('layouts.app')

@section('content')
<h2>Listado de Alumnos</h2>


@if (session('success'))
    <div style="background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif


<div style="margin-bottom: 20px;">
    <a href="{{ route('alumnos.create') }}" class="btn">Crear Nuevo Alumno</a>
</div>

@if ($Alumnos->isEmpty())
    <p>Aún no hay ningún alumno creado. ¡Sé el primero!</p>
@else
    @foreach ($Alumnos as $alumno)
        <div style="background-color: #f0f0f0; padding: 15px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #000;">

            <div style="display: flex; align-items: center; gap: 20px;">

                
                @if ($alumno->fotografia)
                    <img src="{{ Storage::url($alumno->fotografia) }}" alt="Foto de {{ $alumno->nombre }}" width="100" style="border-radius: 50%;">
                @else
                    
                    <img src="[https://via.placeholder.com/100](https://via.placeholder.com/100)" alt="Sin foto" width="100" style="border-radius: 50%;">
                @endif

                <div>
                    <h3 style="margin: 0;">{{ $alumno->nombre }} {{ $alumno->apellidos }}</h3>
                    <p style="margin: 5px 0;">{{ $alumno->correo }} | {{ $alumno->teléfono }} | <strong>Nota: {{ $alumno->nota_media }}</strong></p>
                </div>
            </div>


            <div style="margin-top: 15px;">
                <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn" style="background-color: #007BFF;">Ver</a>
                <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn" style="background-color: #FFC107; color: #333;">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este Alumno? ¡No se puede deshacer!');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn" style="background-color: #DC3545;">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
@endif


@endsection