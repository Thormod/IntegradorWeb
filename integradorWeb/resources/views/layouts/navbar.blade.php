<!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">
          <img src="images/logo.png" height="70px" width="100px">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
            <li class="dropdown dropdown-hover">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                <ul role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                </div>
            </li>
        @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
