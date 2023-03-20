<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href=" https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.css " rel=" stylesheet " />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md">
            <div class="col-2 d-flex justify-content-start">
                <a class="nav-link" href="index.php?operacion=home"> Daily Trends</a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2E76B8;">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="navbar-toggler p2  bd-highlight" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto MargenNavBar" id="Activar">
                    <li class="nav-item active ms-5" id="home">
                        <a class="nav-link" href="index.php?operacion=home">Inicio</a>
                    </li>
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CRUD Feeds
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item  mt-2" href="index.php?operacion=viewFeeds">Ver Feeds</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=createFeeds">Crear Feeds</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=updateFeeds">Modificar Feeds</a>
                            <a class="dropdown-item  mt-2" href="index.php?operacion=deleteFeeds">Eliminar Feeds</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <div id="contenido">
            <?php echo $contenido; ?>
        </div>
    </main>
    <footer class="bg-dark text-light text-center">
        <div class="col-2 d-flex justify-content-start">
            <a class="nav-link" href="index.php?operacion=home"> Daily Trends</a>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
   
</body>

</html>