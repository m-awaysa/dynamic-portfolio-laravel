<!DOCTYPE html>
<html lang="en" class=" public home">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('/css/customStyle.css') }}">
    <!-- bootstrap 5.2-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font awesome Version 6-->
    <script src="https://kit.fontawesome.com/25a6d913fa.js" crossorigin="anonymous"></script>


</head>

<body class="public home">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg  navbar-dark mx-1 border-bottom">
        <div class="container">
            <h4 class="name">MY <span class="text-light">Portfolio</span> </h4>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto text-light">
                    <li class="nav-item">
                        <a href="{{route('portfolio')}}" class="nav-link">Portfolio</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="{{route('project.list')}}" class="nav-link">Admin</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link">Login</a>
                    </li>


                </ul>
            </div>

        </div>
    </nav>
    <div class="col-12 shadow-1">
        <div class="container text-center">
            <a class="me-5 text-success fs-5" onClick='window.location="#aboutMe"'>About Me</a>
            <a class="me-5 text-success fs-5" onClick='window.location="#skills"'>Skills</a>
            <a class="me-5 text-success fs-5" onClick='window.location="#projects"'>Projects</a>
            <a class="me-5 text-success fs-5" onClick='window.location="#contactMe"'>Contact Me</a>
        </div>
    </div>

    @yield('contant')

</body>

</html>