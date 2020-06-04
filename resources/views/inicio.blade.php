    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio</title>
        @include('layout.head')
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.loading2').fadeOut(2000).html();

            $('.salir').on('click', function() {
                location.href = '/logout';
            })
        });
    </script>
    </head>
    <body>
        <header>
            @include('layout.header')
        </header>
        <section>
            <br>
            <div class="container">
                <h5 class="bg-dark"></h5>
            </div>
            <br>
            <div class="container">
                <h1 class="bg-dark">Biblioteca Virtual</h1>
                <img src="Images/libros.jpg" alt="">
            </div>
            <!-- Modal Para salir de la pagina de inicio-->
            <div class="modal" tabindex="-1" role="dialog" id="close_page">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><span class="icon-warning ico-warning"></h5>
                        </div>
                        <div class="modal-body">
                            <p>Realmente desea salir?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info salir" data-dismiss="modal">Aceptar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer></footer>
    </body>
    </html>