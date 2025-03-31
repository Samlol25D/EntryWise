 @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Estudiantes</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary">Registrar Estudiante</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electrónico</th>
                <th>Código QR</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td><img src="{{ asset('storage/' . $student->qr_code) }}" alt="QR Code" width="50"></td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
