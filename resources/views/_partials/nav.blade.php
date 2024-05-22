<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3 fs-4">
  <div class="container">
    <a class="navbar-brand fs-3" href="{{url('/')}}">
          MyHotel
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto"> 
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'bg-dark text-light' : '' }}" href="/">Startseite</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('gallery') ? 'bg-dark text-light' : '' }}" href="/gallery">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('post*') ? 'bg-dark text-light' : '' }}" href="{{url('post')}}">Bewertungen</a>
        </li>


        <li class="nav-item">
          <a class="nav-link {{ Request::is('formular') ? 'bg-dark text-light' : '' }}" href="/formular">Kontakt</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto"> 
      @if (Route::has('login'))
       @auth
        <li class="nav-item">
          <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
        </li>
        
        @else
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
        </li>
         
          @if (Route::has('register'))
          <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">Register</a>
          </li>
          @endif
        @endauth
      @endif
      </ul>
      
    </div>
  </div>
</nav>

@auth
<div class="container bg-light p-2">
  <div class="col-12 h4">
    Hallo <b class="text-secondary"> {{ auth()->user()->name }} </b>, schön, dass Du da bist!
    
  </div>
</div>
@endauth