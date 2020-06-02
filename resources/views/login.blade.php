<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @include('layout.head')
    <script src="{{asset('Scripts/login.js')}}"></script>
</head>
<body>
    <div class="error">
        <span>Los datos ingresados son errados por favor verifique nuevamente</span>
    </div>
    <section>
       <div class="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center aling-items-center">
                <div id="login-column" class="col-md-6">
                    <div class="banner-top">
                        <h3>Biblioteca Virtual</h3>
                        <div id="login-box" class="col-md-12">

                            {{-- <form action="/login-validate" method='POST' class="login-form"> --}}
                            <form id='login-form' class="login-form">
                                @csrf
                                <div class="form-group">
                                    <label for="">Usuario:</label>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text icon-users"></span>
                                        </div>
                                        <input type="text" name="user" pattern="[A-Za-z0-9_-]{1,15}" 
                                        class="form-control" placeholder="Usuario" value="rafa" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Contraseña:</label>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text icon-key"></span>
                                        </div>
                                        <input type="password" name="pasword" pattern="[A-Za-z0-9]{1,15}" class="form-control"
                                         placeholder="****************" value="rafa" required>
                                    </div>
                                </div>
                                <div class="form-group button">
                                    <input type="submit" name="submit" class="btn btn-info btn-lg" value="Iniciar Sesión">
                                    <div class="loading-gear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>
</body>
</html>