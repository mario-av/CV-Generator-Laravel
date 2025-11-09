@extends('layouts.app')

@section('content')
    <h2>Crear Nuevo Curriculum</h2>
    <p>Completa el formulario a continuación:</p>

    <form action="{{ route('curriculums.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <h3>Datos Personales</h3>

        <div class="form-group">
            <label for="profile_image">Foto de Perfil:</label>
            <input type="file" id="profile_image" name="profile_image">
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
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label for="nacionalidad">Nacionalidad:</label>
            <input type="text" id="nacionalidad" name="nacionalidad" required>
        </div>

        <div class="form-group">
            <label for="permiso_conducir">Permiso de Conducir:</label>
            <select id="permiso_conducir" name="permiso_conducir" required>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
        </div>

        <h3>Descripción y Habilidades</h3>

        <div class="form-group">
            <label for="descripcion_personal">Descripción Personal:</label>
            <textarea id="descripcion_personal" name="descripcion_personal" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="experiencia">Experiencia:</label>
            <textarea id="experiencia" name="experiencia" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="educacion">Educación:</label>
            <textarea id="educacion" name="educacion" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="idiomas">Idiomas:</label>
            <textarea id="idiomas" name="idiomas" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="actitudes">Actitudes:</label>
            <textarea id="actitudes" name="actitudes" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="aptitudes">Aptitudes:</label>
            <textarea id="aptitudes" name="aptitudes" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="habilidades_complementarias">Habilidades Complementarias:</label>
            <textarea id="habilidades_complementarias" name="habilidades_complementarias" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn">Guardar Curriculum</button>
        </div>
    </form>
@endsection