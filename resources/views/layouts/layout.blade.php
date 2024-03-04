<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

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
                @auth
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link"> manage</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="btn btn-outline-light" type="submit">logout</button>
                        </form>
                    </li>
                @endauth
                @costumer
                    <li class="nav-item">
                        <a href="{{route('address.create')}}" class="nav-link">add address</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('myAddresses') }}" class="nav-link">My Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('myorders')}}" class="nav-link">my orders</a>
                    </li>
                    <li class="nav-item">
                    <form  action="{{ route('costumer.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Logout</button>
                    </form>
                    </li>
                @elsecostumer
                    <li class="nav-item">
                        <a href='{{ route('costumer.login') }}' class="nav-link">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('costumer.register') }}" class="nav-link">Sign Up</a>
                    </li>
                @endcostumer
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
<footer class="footer">
    <div class="container text-center">
        <p>&copy; 2024 Your Company</p>
        <p>Email: <a href="mailto:creator@example.com">creator@example.com</a></p>
        <p><a href="{{route('login')}}">admin login</a></p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
