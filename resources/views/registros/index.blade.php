<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registros</title>

    <style>

        body{
            font-family: Arial;
            margin: 40px;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            margin:0 5px;
        }

    </style>

</head>
<body>

<h1>Lista de Registros</h1>
<h5>Los datos que se muestran en pantalla no son reales, son inventados</h5>

<a href="{{ route('registros.create') }}">
    Agregar Registro
</a>

<br><br>

<table>

    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>

    @foreach($registros as $registro)

    <tr>

        <td>{{ $registro->id }}</td>

        <td>{{ $registro->nombre }}</td>

        <td>{{ $registro->correo }}</td>

        <td>{{ $registro->telefono }}</td>

        <td>

            <a href="{{ route('registros.show', $registro->id) }}">
                Ver
            </a>

            <a href="{{ route('registros.edit', $registro->id) }}">
                Editar
            </a>

            <form action="{{ route('registros.destroy', $registro->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Eliminar
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

</body>
</html>