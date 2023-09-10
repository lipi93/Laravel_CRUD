<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Laravel CRUD With Image</title>
</head>
<body>
      <nav class="navbar navbar-expand-sm bg-dark">  
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/"> Products</a>
          </li>         
        </ul>      
      </nav>

      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <strong>{{ $message }}</strong>
        </div>          
      @endif

      @yield('content')
</body>
</html>