<html>
<head>
  <link rel="stylesheet" href="../resources/css/style.css">
  <title>@yield('title')</title>
</head>
<body>
  <div class = "header">
    <img src="image/start2.jpg"style="width: 100%">
    <p>@yield('title')</p>
  </div>
  @yield('content')
    <footer>
      @yield('footer')
    </footer>
</body>
</html>