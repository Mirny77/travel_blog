<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
</head>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="col-6 navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active offset-lg-3">
                <a class="nav-link" href="{{route('post.create')}}">Создать пост<span class="sr-only ">(current)</span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{route('post.index')}}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Найти пост" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>

    </div>
</nav>
<div class="container">
    @yield('content')


</div>
</body>
</html>

