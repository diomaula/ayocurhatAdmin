<!DOCTYPE html>
<html>
<head>
    <title>AyoCurhat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style_damin.css') }}" /> 

</head>
<body>
  <nav class="navbar bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ ('/images/Logo_biru.png') }}"  width="50" height="50">
      </a>
    </div>

    <div>
        <a class="navbar-brand" href="#">
            <img src="{{ ('/images/Simple Avatar.png') }}"  width="40" height="40">
        </a>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
    
</body>
</html>