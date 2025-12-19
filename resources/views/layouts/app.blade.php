<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('titulo', 'Consultorio dental')</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.c
ss" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg px-3">

    <a class="navbar-brand" href="{{ route('consultas.index') }}">
        Consultorio dental JJ
    </a>
    <div class="ms-lg-auto">
            <a class="btn btn-primary btn-lg mt-2 mt-lg-0"
               href="{{ route('consultas.create') }}">
                Agendar cita
            </a>
        </div>
</nav>

<div class="container my-4">
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
@yield('contenido')
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.
min.js"></script>
<div class="container my-4">

</body>
</html>
