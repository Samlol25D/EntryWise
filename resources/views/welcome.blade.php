<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Bienvenido al Sistema de Control de Entrada y Salida de Estudiantes</h1>
    <p>Esta aplicación permite gestionar la entrada y salida de los estudiantes a la sede mediante códigos QR.</p>

    <div class="mt-4">
        <a href="{{ route('students.create') }}" class="btn btn-primary btn-lg">Registrar Estudiante</a>
    </div>
    
    <div class="mt-3">
        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Iniciar Sesión</a>
    </div>
</div>
@endsection
@section('styles')
    <style>
        .container {
            margin-top: 50px;
        }
        h1 {
            font-size: 2.5rem;
            color: #343a40;
        }
        p {
            font-size: 1.25rem;
            color: #6c757d;
        }
        .btn {
            width: 250px;
            margin-top: 15px;
        }
    </style>
@endsection
