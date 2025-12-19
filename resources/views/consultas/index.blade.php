@extends('layouts.app')
@section('titulo', 'Consultas')

@section('contenido')
<div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Paciente</th>
                        <th>Teléfono</th>
                        <th>Fecha</th>
                        <th>Fecha agenda</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($consultas as $consulta)
                        <tr>
                            <td>{{ $consulta->paciente }}</td>
                            <td>{{ $consulta->telefono }}</td>
                            <td>{{ $consulta->fecha }}</td>
                            <td>{{ $consulta->created_at->format('Y-m-d H:i') }}</td>
                            <td>{{ $consulta->estado }}</td>
                            <td>
                                <a href="{{ route('consultas.edit', $consulta->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Modificar
                                </a>

                                <form class="d-inline" action="{{ route('consultas.destroy', $consulta) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('¿Deseas eliminar esta consulta?')">
                                Eliminar
                            </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>


</div>
@endsection
