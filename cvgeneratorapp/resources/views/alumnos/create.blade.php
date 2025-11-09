@extends('layouts.app')

@section('content')
    <h2\>Crear Nuevo Alumno</h2\>
    <p\>Completa el formulario a continuación:</p\>

    <form action="{{ route('Alumnos.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <h3>Datos Personales</h3>

        <div class="form-group">
            <label for="fotografia">Foto de Perfil:</label>
            <input type="file" id="fotografia" name="fotografia">
        </div>

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </div>

        <div class="form-group">
            <label for="teléfono">Teléfono:</label>
            <input type="tel" id="teléfono" name="teléfono" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label for="nota_media">Nota Media:</label>
            <input type="number" id="nota_media" name="nota_media" step="0.01" min="0" max="10" required>
        </div>

        <h3>Información Profesional</h3>

        <div class="form-group">
            <label for="experiencia">Experiencia:</label>
            <textarea id="experiencia" name="experiencia" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="formación">Formación:</label>
            <textarea id="formación" name="formación" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="habilidades">Habilidades:</label>
            <textarea id="habilidades" name="habilidades" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn">Guardar Alumno</button>
        </div>
    </form>

@endsection