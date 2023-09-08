@extends('layout.login')

@section('login-content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <body style="background-image: url('/coffeetime/public/images/Inicio.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-20">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
                                        </div>
                                        <form class="user">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" placeholder="Correo Electronico">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" placeholder="Contraseña">
                                            </div>
                                            <br>
                                            <a href="home" class="d-grid btn btn-primary btn-user btn-block">Login</a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" style="color: black;" href="register">Crear cuenta</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
@endsection
