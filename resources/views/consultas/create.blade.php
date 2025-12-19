@extends('layouts.app')
@section('titulo', 'Consultas')
@section('contenido')

<form action="{{ route('consultas.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Paciente</label>
        <input type="text" name="paciente"
               class="form-control @error('paciente') is-invalid @enderror"
               value="{{ old('paciente') }}">

        @error('paciente')
            <div class="invalid-feedback">
                {{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono"
               class="form-control @error('telefono') is-invalid @enderror"
               value="{{ old('telefono') }}">

        @error('telefono')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="fecha"
               class="form-control @error('fecha') is-invalid @enderror"
               value="{{ old('fecha') }}">

        @error('fecha')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <a href="{{ route('consultas.index') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
