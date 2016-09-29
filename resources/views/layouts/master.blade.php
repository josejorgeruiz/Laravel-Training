<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="description" content="My training">
  <meta name="author" content="Jose J. Ruiz">
  <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
  <!-- <link rel="stylesheet" href="{{ URL::secure('src/css/main.css') }}"> -->
  @yield('styles')
</head>
<body>
    @include('includes.header')
    <div class="main">
        @yield('content')
    </div>
</body>
</html>