<nav class="navbar navbar-expand-lg @if(Route::currentRouteName() == 'welcome') bg-secondaryph @else bg-primary @endif" height="60">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="/image/controller.svg" alt="Bootstrap" width="30" height="24"> Play </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('articles')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about-us')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>