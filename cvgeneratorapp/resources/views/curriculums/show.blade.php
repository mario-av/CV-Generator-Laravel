@extends('layouts.app') 

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h2>CV de {{ $curriculum->nombre }} {{ $curriculum->apellidos }}</h2>
        <a href="{{ route('curriculums.index') }}" class="btn" style="background-color: #555;">&laquo; Volver al Listado</a>
    </div>

    <div style="background-color: #f0f0f0; padding: 20px; border-radius: 8px; margin-top: 20px; border: 1px solid #000;">

        <div style="display: flex; align-items: flex-start; gap: 20px; border-bottom: 1px solid #ccc; padding-bottom: 20px;">
            @if ($curriculum->profile_image)
                <img src="{{ Storage::url($curriculum->profile_image) }}" alt="Foto de {{ $curriculum->nombre }}" width="150" style="border-radius: 8px;">
            @else
                <img src="https://via.placeholder.com/150" alt="Sin foto" width="150" style="border-radius: 8px;">
            @endif

            <div>
                <h3 style="margin-top: 0;">{{ $curriculum->nombre }} {{ $curriculum->apellidos }}</h3>
                <p><strong>Email:</strong> {{ $curriculum->email }}</p>
                <p><strong>Teléfono:</strong> {{ $curriculum->telefono }}</p>
                <p><strong>Dirección:</strong> {{ $curriculum->direccion }}</p>
                <p><strong>Fecha de Nac.:</strong> {{ \Carbon\Carbon::parse($curriculum->fecha_nacimiento)->format('d/m/Y') }}</p>
                <p><strong>Nacionalidad:</strong> {{ $curriculum->nacionalidad }}</p>
                <p><strong>Permiso de Conducir:</strong> <span style="text-transform: capitalize;">{{ $curriculum->permiso_conducir }}</span></p>
            </div>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Descripción Personal</h4>
            <p>{{ $curriculum->descripcion_personal }}</p>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Experiencia Laboral</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->experiencia }}</p>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Educación</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->educacion }}</p>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Idiomas</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->idiomas }}</p>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Actitudes</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->actitudes }}</p>
        </div>

        <div style="border-bottom: 1px solid #ccc; padding: 20px 0;">
            <h4>Aptitudes</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->aptitudes }}</p>
        </div>

        <div style="padding: 20px 0 0;">
            <h4>Habilidades Complementarias</h4>
            <p style="white-space: pre-wrap;">{{ $curriculum->habilidades_complementarias }}</p>
        </div>

    </div>

    <div style="margin-top: 20px; text-align: right;">
        <a href="#" class="btn" style="background-color: #FFC107; color: #333;">Editar este CV</a>
            <form action="{{ route('curriculums.destroy', $cv->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este CV? ¡No se puede deshacer!');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" style="background-color: #DC3545;">Eliminar</button>
            </form>
    </div>
@endsection