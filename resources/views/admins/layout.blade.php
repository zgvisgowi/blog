<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <style>
        body{
            background: #eee;
        }

        #side_nav{
            background: #000;
            min-width: 250px;
            max-width: 250px;
            transition: all 0.3s;
        }
        .content{
            min-height: 100vh;
            width: 100%;
        }
        hr.h-color{
            background: #eee;
        }

        .sidebar li.active{
            background: #eee;
            border-radius: 8px;
        }

        .sidebar li.active a, .sidebar li.active a:hover {
            color: #000;
        }
        .sidebar li a{
            color: #fff;
        }

        @media(max-width: 767px){
            #side_nav{
                margin-left: -250px;
                position: absolute;
                min-height: 100vh;
                z-index: 1;

            }
            #side_nav.active{
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">CL</span> <span
                    class="text-white">Coding League</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i
                    class="fas fa-stream"></i></button>
        </div>

        <ul class="list-unstyled px-2">
            <li class="active"><a href="{{route('admin.dashboard')}}" class="text-decoration-none px-3 py-2 d-block"><i
                        class="fas fa-home"></i> Dashboard</a></li>
            <li class=""><a href="{{route('manage.products')}}" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-list"></i>
                    Products</a></li>
            <li class=""><a href="{{route('manage.costumers')}}" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fas fa-comment"></i>costumers</span>
                    <span class="bg-dark rounded-pill text-white py-0 px-2">02</span>
                </a>
            </li>
            <li class=""><a href="{{route('manage.orders')}}" class="text-decoration-none px-3 py-2 d-block"><i
                        class="fas fa-envelope-open-text"></i> orders</a></li>
            <li class=""><a href="{{route('admins.createNewAdmin')}}" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-users"></i>
                    add admin</a></li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-2">
            <li class=""><a href="{{route('product.create')}}" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-bars"></i>
                    create product</a></li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fas fa-bell"></i>
                    Notifications</a></li>

        </ul>

    </div>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-md-none d-block">
                    <button class="btn px-1 py-0 open-btn me-2"><i class="fas fa-stream"></i></button>
                    <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">CL</span></a>

                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="dashboard-content px-3 pt-4">

            @yield('content')
        </div>
    </div>
</div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z8vwKcSjE8+nddIbifSLtytlr/EvM3ZvFeM2XY" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var sidebarItems = document.querySelectorAll(".sidebar ul li");

        sidebarItems.forEach(function(item) {
            item.addEventListener("click", function() {
                var activeItems = document.querySelectorAll(".sidebar ul li.active");
                activeItems.forEach(function(activeItem) {
                    activeItem.classList.remove("active");
                });

                this.classList.add("active");
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var openBtn = document.querySelector(".open-btn");
        var closeBtn = document.querySelector(".close-btn");
        var sidebar = document.querySelector(".sidebar");

        openBtn.addEventListener("click", function() {
            sidebar.classList.add("active");
        });

        closeBtn.addEventListener("click", function() {
            sidebar.classList.remove("active");
        });
    });
</script>
</body>
</html>
