<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #171010;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">KEYPEDIA</a>
      <div>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item dropdown">
                    <a style="text-transform:uppercase" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @foreach ($header['category'] as $value)
                            <li><a class="dropdown-item" href='/Keyboard/List/{{$value['id']}}'>{{$value['name']}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="text-transform:uppercase" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{$header['role']['name']}}</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @foreach ($header['navigation'] as $value)
                            <li><a class="dropdown-item" href='{{$value['path']}}'>{{$value['name']}}</a></li>
                        @endforeach
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/Password/Change">Change Password</a></li>
                        <li><a class="dropdown-item" href="/Logout">Logout</a></li>
                    </ul>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link"  href="/Login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="/Register">Register</a>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link" style="color: white; pointer-events: none; cursor: default;" href="#">{{date("l").", ".date("d-M-Y")}}</a>
            </li>
          </ul>
      </div>
    </div>
</nav>
