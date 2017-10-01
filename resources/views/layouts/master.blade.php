<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
  <!-- CSS Reset -->
  <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
  <!-- Milligram CSS minified -->
  <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- You should properly set the path from the main file. -->
  <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
  @yield('styles')
</head>
<body>

  @include('partials.header')

  <div class="container">
    @yield('content')
  </div>

  @yield('scripts')
</body>
</html>