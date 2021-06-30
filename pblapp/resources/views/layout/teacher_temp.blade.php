<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="../resources/css/teacher.css">
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