<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top fixed-top">
  <div class="container " style="text-align: center;">
    <a class="navbar-brand" href="{{route('root_path')}}">Laracate</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{set_active_route('root_path')}}" aria-current="page" href="{{route('root_path')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{set_active_route('about_path')}}" href="{{route('about_path')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Artisans</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Planet
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
            <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
            <li><a class="dropdown-item" href="https://laracasts.com">Laracasts</a></li>
            <li><a class="dropdown-item" href="https://larajobs.com">Larajobs</a></li>
            <li><a class="dropdown-item" href="https://laravel-news.com">Laravel News</a></li>
            <li><a class="dropdown-item" href="https://larachat.com">Larachat</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
     </ul>
  </div>
</nav>