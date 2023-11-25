<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="text-danger">no</span>thing</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmanu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmanu">
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">login</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/Products" class="nav-link"> create product</a>
                    </li>
                    <li class="nav-item">
                       <a href="/createproduct" class="nav-link"> create product</a>
                    </li>
                    <li class="nav-item">
                        <a href="/orders" class="nav-link">orders</a>
                    </li>
                    <li class="nav-item">

                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit">logout</button>
                        </form>
                    </li>
                @endauth
                <li>

                </li>
                <li>

                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="album py-5">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <div class="floating-icon">
        <a href="/cart" >
            <!-- Use your preferred icon (Font Awesome, SVG, etc.) -->
            <i class="bi bi-bag"></i>
        </a>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
