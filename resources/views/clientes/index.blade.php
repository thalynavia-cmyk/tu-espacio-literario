<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu Espacio Literario - Módulo Clientes</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        .form-container { background: #f4f4f4; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Gestión de Clientes - Tu Espacio Literario</h1>

    <!-- FORMULARIO PARA REGISTRAR (OPERACIÓN: INSERTAR) -->
    <div class="form-container">
        <h3>Registrar Nuevo Cliente</h3>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <button type="submit">Guardar Cliente</button>
        </form>
    </div>

    <!-- TABLA PARA LISTAR (OPERACIÓN: CONSULTAR) -->
    <h3>Listado de Clientes Registrados</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <button>Editar</button>
                    <button style="color:red">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
