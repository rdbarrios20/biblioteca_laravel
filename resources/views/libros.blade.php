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
                <div class="form-group cold-md3">
                    <input type="submit" id="btenviar" class="btn btn-lg btn-success" value="Guardar">
                </div>
            </form>
        </div>
    </section>
</body>
</html>