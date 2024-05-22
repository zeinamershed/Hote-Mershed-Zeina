<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3 fs-4">
  <div class="container">
    <a class="navbar-brand fs-3" href="{{url('/')}}">
          myProject
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
          <a class="nav-link {{ Request::is('about') ? 'bg-dark text-light' : '' }}" href="/about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('project') ? 'bg-dark text-light' : '' }}" href="/project">Projekte</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('contact') ? 'bg-dark text-light' : '' }}" href="/contact">Kontakt</a>
        </li>

			</ul>
    </div>
  </div>
</nav>
