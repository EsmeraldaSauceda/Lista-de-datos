<h1>Agregar Registro</h1>

<form action="{{ route('registros.store') }}" method="POST">

    @csrf

    <input type="text" name="nombre" placeholder="Nombre">

    <input type="email" name="correo" placeholder="Correo">

    <input type="text" name="telefono" placeholder="Teléfono">

    <button type="submit">
        Guardar
    </button>

</form>