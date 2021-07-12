<html>
<head>
  @yield('header')
  <link rel="stylesheet" href="../resources/css/student.css">
  <title>@yield('title')</title>
</head>
<body>
  <div class = "header">
    <img src="image/start2.jpg"style="width: 100%">
    <p>@yield('title')</p>
  </div>
  @yield('content')
  @yield('footer')
</body>
</html>