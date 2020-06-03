<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    @include('layout.head')
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <section>
        <div>
            <div class="background">
                <div>
                    <br>
                    <div class="busqueda">
                        <label for="criterio_busqueda">Buscar</label>
                        <input type="text" name="criterio_busqueda" class="fs fas-search" id="criterio_busqueda"></input>
                    </div>
                    <div class="contenedor">
                        <div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Código Libro</th>
                                            <th>Autor</th>
                                            <th>Nombre Libro</th>
                                            <th>Fecha Expedición</th>
                                            <th>Disponibilidad</th>
                                            <th>Precio Publico</th>
                                            <th>Precio Interno</th>
                                            <th>Reservado</th>
                                            <th>Cantidad</th>
                                            <th>Eliminar</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($libros as $item)
                                            <tr>
                                                <td>{{ $item->CODIGO_LIBRO }}</td>
                                                <td>{{ $item->AUTOR }}</td>
                                                <td>{{ $item->NOMBRE_LIBRO }}</td>
                                                <td>{{ $item->FECHA_EXPEDICION }}</td>
                                                <td>{{ $item->DISPONIBILIDAD }}</td>
                                                <td>{{ $item->PRECIO_PUBLICO }}</td>
                                                <td>{{ $item->PRECIO_INTERNO }}</td>
                                                <td>{{ $item->RESERVADO }}</td>
                                                <td>{{ $item->CANTIDAD }}</td>
                                                <td><button id='btn_eliminar' class='btn btn-danger clsEliminar' data-codigo='" + cNuevo + "'><span class='icon-trash'></span></button></td>
                                                <td> <button id='btn_modificar' class='btn btn-warning clsModificar' data-codigo='" + cNuevo + "' data-toggle='modal' data-target='#myModal'><span class='icon-pencil'></span></button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>