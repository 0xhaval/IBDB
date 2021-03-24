

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="">
        <span>IBDB</span><i>Intenet Baook DataBase</i>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ route('book.index') }}">Book</a></li>
          <li><a href="{{ route('category.index') }}">Categories</a></li>
        <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ route('page.contact') }}">Contact</a></li>
        <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="getstarted scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <p class="dropdown-item bg-primary p-4 text-light">{{ Auth::user()->email }}</p>
                        <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">Setting</a>
                        @if (Auth::user()->isAdmin())
                            <a class="dropdown-item" href="{{ route('admin.home') }}">Admin Panel</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
