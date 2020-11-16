<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotek</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
  @include('layouts.header')
  @yield('content')
  @include('../footer')
</body>
</html>