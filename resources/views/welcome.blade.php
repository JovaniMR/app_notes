<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-8 col-lg-6" style="margin-top: 15%">
                <div class="card container-full">
                    <div class="card-body text-center">
                        <h2>
                            <strong>BIENVENIDO(A) A TU APLICACIÓN DE NOTAS</strong>
                        </h2>
                        <div class="row justify-content-center mt-4 mb-4">
                            <hr class="w-50" style="height: 5px">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 mb-3"><a href="{{ route('login') }}"
                                    class="btn btn-success btn-lg btn-block">Iniciar Sesión</a></div>
                            <div class="col-12 col-lg-6 mb-3"><a href="{{ route('register') }}"
                                    class="btn btn-success btn-lg btn-block">Registrarse</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center" style="position: absolute; bottom:5%; width:100%">
        <div class="col">
            <h6><strong>&copy 2020 Sitio desarrollado por Jovani Martinez</strong></h6>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

</body>

</html>