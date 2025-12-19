@extends('layouts.app')
@section('titulo', 'Consultas')
@section('contenido')

<form action="{{ route('consultas.update', $consulta->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Paciente</label>
        <input
            type="text"
            name="paciente"
            class="form-control @error('paciente') is-invalid @enderror"
            value="{{ old('paciente', $consulta->paciente) }}"
            required
        >
        @error('paciente')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input
            type="text"
            name="telefono"
            class="form-control @error('telefono') is-invalid @enderror"
            value="{{ old('telefono', $consulta->telefono) }}"
            required
        >
        @error('telefono')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input
            type="date"
            name="fecha"
            class="form-control @error('fecha') is-invalid @enderror"
            value="{{ old('fecha', $consulta->fecha) }}"
            required
        >
        @error('fecha')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select
            name="estado"
            class="form-select @error('estado') is-invalid @enderror"
            required
        >
            <option value="pendiente" {{ old('estado', $consulta->estado) == 'pendiente' ? 'selected' : '' }}>
                pendiente
            </option>
            <option value="atendido" {{ old('estado', $consulta->estado) == 'atendido' ? 'selected' : '' }}>
                atendido
            </option>
            <option value="cancelado" {{ old('estado', $consulta->estado) == 'cancelado' ? 'selected' : '' }}>
                cancelado
            </option>
        </select>
        @error('estado')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <a href="{{ route('consultas.index') }}" class="btn btn-secondary">
        Cancelar
    </a>
    <button type="submit" class="btn btn-primary">
        Guardar
    </button>

</form>

@endsection
