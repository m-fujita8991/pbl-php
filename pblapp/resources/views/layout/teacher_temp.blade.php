<html>
<head>
  <title>@yield('title')</title>
  <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:100pt; text-align:right; color:#f6f6f6;
      margin:-50px 0px -100px 0px; }
  .header p {
    position: absolute;
    top: -20;
    left: 20;
    font-size:70pt;
    color:#ffffff;}
  </style>
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