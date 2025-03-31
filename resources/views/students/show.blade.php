@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de {{ $student->name }}</h1>

    <p><strong>Correo Electrónico:</strong> {{ $student->email }}</p>
    <p><strong>Código QR:</strong></p>
    <img src="{{ asset('storage/' . $student->qr_code) }}" alt="QR Code" width="150">

    <h3>Registrar Entrada/Salida</h3>
    <form action="{{ route('entryExit.store', $student->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="action">Acción</label>
            <select class="form-control" id="action" name="action" required>
                <option value="entry">Entrada</option>
                <option value="exit">Salida</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Registrar</button>
    </form>

    <h3 class="mt-4">Historial de Entrada y Salida</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Acción</th>
                <th>Fecha y Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student->entryExitRecords as $record)
                <tr>
                    <td>{{ ucfirst($record->action) }}</td>
                    <td>{{ $record->timestamp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
