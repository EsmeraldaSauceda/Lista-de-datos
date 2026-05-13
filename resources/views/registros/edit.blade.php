<h1>Editar Registro</h1>

<form action="{{ route('registros.update', $registro->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="nombre"
           value="{{ $registro->nombre }}">

    <input type="email"
           name="correo"
           value="{{ $registro->correo }}">

    <input type="text"
           name="telefono"
           value="{{ $registro->telefono }}">

    <button type="submit">
        Actualizar
    </button>

</form>