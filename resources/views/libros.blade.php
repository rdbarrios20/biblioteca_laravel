<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Libro</title>
    @include('layout.head')
    <script>
        $(document).ready(function () {
            $('.loading2').fadeOut(1000).html();
            $("#codigo").keyup(function () {
                this.value = (this.value + '').replace(/[^0-9]/g, '');
            });
            $("#autor").keyup(function () {
                this.value = (this.value + '').replace(/[^ a-záéíóúüñ]+/ig, '');
            });
            $("#nombre_libro").keyup(function () {
                this.value = (this.value + '').replace(/[^ a-záéíóúüñ]+/ig, '');
            });
            $("#precio_publico").keyup(function () {
                this.value = (this.value + '').replace(/[^0-9]/g, '');
            });
            $("#precio_interno").keyup(function () {
                this.value = (this.value + '').replace(/[^0-9]/g, '');
            });
        });
    </script>
</head>
<body>
    <header>
        @include('layout.header')
    </header>
    <section>
        <div class="container">
            <h1>Registro Libros</h1>
            <form class="background" id="formulario">
                @csrf
                <div class="form-group ">
                    <label for="">Código</label>
                    <input type="text" name="codigo" id="codigo" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Autor</label>
                    <input type="text" name="autor" id="autor" class="form-control" required>
                </div>
                <div class="form-group ">
                    <label for="">Nombre del libro</label>
                    <input type="text" name="nombre_libro" id="nombre_libro" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Fecha de Expedición</label>
                    <input type="date" name="fecha_expedicion" id="fecha_expedicion">
                </div>
                <div class="form-group">
                    <label for="">Disponibilidad</label>
                    <select name="disponibilidad" id="disponibilidad">
                        <option value="En existencia">En existencia</option>
                        <option value="Agotado">Agotado</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="">Precio Publico</label>
                    <input type="text" name="precio_publico" id="precio_publico" class="form-control" placeholder="$" required>
                </div>
                <div class="form-group ">
                    <label for="">Precio Interno</label>
                    <input type="text" name="precio_interno" id="precio_interno" class="form-control" placeholder="$" required>
                </div>
                <div class="form-group">
                    <label for="">Reservado</label>
                    <input type="checkbox" name="reservado" id="reservado" value="1">
                </div>
                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select name="id_categoria" id="id_categoria">
                        <option value="1">Romanticos</option>
                        <option value="2">Ficcion</option>
                        <option value="3">Familia</option>
                    </select>
                </div>
                <div class="form-group cold-md3">
                    <input type="submit" id="btenviar" class="btn btn-lg btn-success" value="Guardar">
                </div>
            </form>
        </div>
        <!--Modal para el mensaje de datos guardados satisfactoriamente -->
        <div>
            <div class="modal" tabindex="-1" role="dialog" id="success_message">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Mensaje Datos Guardados</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="message"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para el validar los precios-->
        <div class="modal" tabindex="-1" role="dialog" id="Cost_message">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Validacion Precios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="Cost"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>