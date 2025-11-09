@extends('layouts.app') 

@section('content')
    <h2>Salón de la Fama de CVs</h2>

    @if (session('success'))
        <div style="background-color: #4CAF50; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif


    <div style="margin-bottom: 20px;">
        <a href="{{ route('curriculums.create') }}" class="btn">Crear Nuevo CV</a>
    </div>

    @if ($curriculums->isEmpty())
        <p>Aún no hay ningún currículum creado. ¡Sé el primero!</p>
    @else
        @foreach ($curriculums as $cv)
            <div style="background-color: #f0f0f0; padding: 15px; border-radius: 8px; margin-bottom: 15px; border: 1px solid #000;">

                <div style="display: flex; align-items: center; gap: 20px;">

                   
                    @if ($cv->profile_image)
                        <img src="{{ Storage::url($cv->profile_image) }}" alt="Foto de {{ $cv->nombre }}" width="100" style="border-radius: 50%;">
                    @else
                        
                        <img src="https://via.placeholder.com/100" alt="Sin foto" width="100" style="border-radius: 50%;">
                    @endif

                    <div>
                        <h3 style="margin: 0;">{{ $cv->nombre }} {{ $cv->apellidos }}</h3>
                        <p style="margin: 5px 0;">{{ $cv->email }} | {{ $cv->telefono }}</p>
                    </div>
                </div>


                <div style="margin-top: 15px;">
                    <a href="#" class="btn" style="background-color: #007BFF;">Ver</a>
                    <a href="#" class="btn" style="background-color: #FFC107; color: #333;">Editar</a>
                    <form action="#" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" style="background-color: #DC3545;">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

@endsection