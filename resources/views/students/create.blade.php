<!-- resources/views/students/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registrar Estudiante</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="qr_code">Código QR</label>
            <input type="file" class="form-control" id="qr_code" name="qr_code" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
    </form>
</div>
@endsection
