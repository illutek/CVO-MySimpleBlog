<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '| Admin - MySimpleBlog')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <div class="container">
        <h1>Admin - MySimpleBlog</h1>
    </div>
</header>
<main class="container">
    <a href="{{ route('auth.logout') }}">Logout</a>
    @yield('content')
</main>
<footer>
    <div class="container">
        |copy; {{ date("d-m-Y") }} CVO De verdieping
    </div>
</footer>

</body>
</html>