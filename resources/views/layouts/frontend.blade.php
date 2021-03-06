<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>My Simple Blog</h1>
        <p>By PHP Framework</p>
    </div>
</header>
<main class="container">
    @yield('content')
</main>
<footer>
    <div class="container">
        &copy; {{ date("Y") }}  CVO De Verdieping
        <a href="{{ route('admin.posts.index') }}">Admin</a>
    </div>
</footer>
</body>
</html>