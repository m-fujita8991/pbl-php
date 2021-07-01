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
    <button onclick="location.href='participant2'" style="position: absolute; right: 20px; bottom: 10px">決定</button></div>
    <button onclick="history.back()" >戻る</button></div>
      @yield('footer')
    </footer>
</body>
</html>