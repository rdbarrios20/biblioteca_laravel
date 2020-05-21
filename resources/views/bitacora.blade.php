<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partial.head');
    </head>
    <body>
    <h1>{{ $response }}</h1>
        <div class="background">
            <br>
            <div class="busqueda">
                <label for="fecha">Limpiar por fecha</label>
                <input type="date" name="fecha" id="fecha" class="">
                <span></span>
                <button type="button" class="btn btn-danger"  value="limpiar" data-toggle="modal" data-target="#Eliminar_fecha"><span class='icon-trash'></span></button>
            </div>
            <div class="contenedor">
                <div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Rol</th>
                                <th>Id Usuario</th>
                                <th>Accion</th>
                                <th>Fecha</th>
                                <th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bitacora as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->rol }}</td>
                                <td>{{ $item->id_usuario }}</td>
                                <td>{{ $item->accion }}</td>
                                <td>{{ $item->fecha }}</td>
                                <td>{{ $item->detalle }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
