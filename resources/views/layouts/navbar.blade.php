   
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-success" href="/posts">Categories</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link text-success" href="/posts">Home<span class="sr-only">(current)</span></a>
                </li>
                @auth
                <li class="nav-item">
                  <a class="nav-link text-success" href="/posts/create">Create-Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="/my-posts">My-Posts</a>
                </li>
                @endauth
                @if (Auth::check())
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout">Logout</a>
                  </div>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link text-success" href="/register">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-success" href="/login">Log-in</a>
                </li>
                @endif
               
                
                
              </ul>
            </div>
          </nav>