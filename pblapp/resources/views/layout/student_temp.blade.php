<html>
<head>
  <link rel="stylesheet" href="../resources/css/student.css">
  <title>@yield('title')</title>
</head>
<body>
  <div class = "header">
    <img src="image/start2.jpg"style="width: 100%">
    <p>@yield('title')</p>
  </div>
  @yield('content')
    <footer>
    <div class = 'footer'></div>
    <div class = 'next'><a href="#footer">決定</a></div>
    <div class = 'back'><a href="#footer">戻る</a></div>
      @yield('footer')
    </footer>
</body>
</html>