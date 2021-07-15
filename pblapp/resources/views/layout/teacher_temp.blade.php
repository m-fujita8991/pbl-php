<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="../resources/css/teacher.css">
  <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
</head>
<body>
  <div class = "header">
  <img src="image/teacher.jpg"style="width: 100%">
  <p>@yield('title')<p>
  </div>
  @yield('content')
  @yield('footer')
</body>
</html>