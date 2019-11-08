<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel-B-5-B</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md " style="background: #A8329E;">
  <a class="navbar-brand" href="#" style=" color: white">Contact us</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  style=" color: white" href="/saran/create">Input Saran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  style=" color: white" href="/saran">Tampilkan Saran</a>
      </li>
    </ul>
  </div>  
</nav>
<br>

@yield('content')

</body>
</html>


