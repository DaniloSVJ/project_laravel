<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4SOF4y4Ck4S" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1do4A+gf8k5l7l4lMz4i3WDQn1Z7y/JonasIUNsobU+KZkx2f4Z+d5GDK6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy4Ck4SOF4y4Ck4C2DgHfViXydVeLm+JDM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons.js"></script>

    <script src="/js/script.js"></script>
</head>
<body>
  
<header>

    <nav class='navbar navbar-expand-lg navbar-light'>
        <div class='collapse navbar-collapse' id='navbar'>
            <a href="" class="navbar-brand">
                <img src="/img/logo.png" alt="">
            </a>
            <ul class='navbar-nav'>
                <li class="nav-item">
                    <a href="" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meus Eventos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" 
                           class="nav-link"
                           onclick='event.preventDefault();
                           this.closest("form").submit();'

                         >Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest

            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        @yield('content')  
        </div>
    </div>
</main> 


<footer>
    <p>HDC Events &copy; 2023</p>
</footer>
</body>
</html>