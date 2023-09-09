<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #D2B48C;">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="{{ asset('images/logo.png') }}" width="60">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black" href="{{ route('menu') }}">Menú</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
   </header>
    @yield('login-content')
</body>
</html>
