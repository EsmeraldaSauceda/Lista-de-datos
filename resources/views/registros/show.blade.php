<h1>Detalle del Registro</h1>

<p>ID: {{ $registro->id }}</p>

<p>Nombre: {{ $registro->nombre }}</p>

<p>Correo: {{ $registro->correo }}</p>

<p>Teléfono: {{ $registro->telefono }}</p>

<a href="{{ route('registros.index') }}">
    Volver
</a>