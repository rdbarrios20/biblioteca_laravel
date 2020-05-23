<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="inicio.php">Inicio<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="registro_libro.php">Registro Libro</a>
        <a class="nav-item nav-link active" href="{{url('/inventario')}}">Inventario</a>
            <a class="nav-item nav-link active" data-toggle='modal' data-target='#close_page' href="">Salir</a>
            <a class="nav-item nav-link active" href="{{url('/bitacora')}}" >Bitacora</a>
        </div>
    </div>
</nav>