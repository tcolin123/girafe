<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/base.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
      <nav>
        <div class="topnav">
            <li><a href="{{ url('/acceuil') }}">acceuil</a></li>
            <li><a href="{{ url('/liste') }}">liste</a></li>
            <li><a href="{{ url('/ajouter') }}">ajouter</a></li>
        </div>
      </nav>
  </header>

<main>
      @yield('content')
  </main>

</body>
</html>