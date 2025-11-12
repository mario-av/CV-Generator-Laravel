@extends('layouts.app')

@section('content')
<h2>Editando CV de {{ $Alumno->nombre }}</h2>
<p>Modifica el formulario a continuación:</p>


<form action="{{ route('alumnos.update', $Alumno->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <h3>Datos Personales</h3>

    <div class="form-group">
        <label for="fotografia">Foto de Perfil:</label>
        <input type="file" id="fotografia" name="fotografia">


        @if ($Alumno->fotografia)
            <img src="{{ Storage::url($Alumno->fotografia) }}" alt="Foto Actual" width="100"
                style="border-radius: 8px; margin-top: 10px;">
            <p><small>Dejar vacío para no cambiar la foto.</small></p>
        @endif
    </div>

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $Alumno->nombre }}" required>
    </div>

    <div class="form-group">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ $Alumno->apellidos }}" required>
    </div>

    <div class="form-group">
        <label for="teléfono">Teléfono:</label>
        <input type="tel" id="teléfono" name="teléfono" value="{{ $Alumno->teléfono }}" required>
    </div>

    <div class="form-group">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{ $Alumno->correo }}" required>
    </div>

    <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $Alumno->fecha_nacimiento }}"
            required>
    </div>

    <div class="form-group">
        <label for="nota_media">Nota Media:</label>
        <input type="number" id="nota_media" name="nota_media" value="{{ $Alumno->nota_media }}" step="0.01" min="0" max="10" required>
    </div>

    <h3>Información Profesional</h3>

    <div class="form-group">
        <label for="experiencia">Experiencia:</label>
        <textarea id="experiencia" name="experiencia" rows="4" required>{{ $Alumno->experiencia }}</textarea>
    </div>

    <div class="form-group">
        <label for="formación">Formación:</label>
        <textarea id="formación" name="formación" rows="4" required>{{ $Alumno->formación }}</textarea>
    </div>

    <div class="form-group">
        <label for="habilidades">Habilidades:</label>
        <textarea id="habilidades" name="habilidades" rows="4" required>{{ $Alumno->habilidades }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn">Actualizar Alumno</button>
    </div>
</form>


@endsection