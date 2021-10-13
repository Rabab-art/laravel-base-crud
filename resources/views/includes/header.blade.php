<nav class="navbar navbar-expand-lg navbar-light m-0 m-auto">

  <div class="container-fluid p-4">
    <img src="{{asset('images/dc-logo.png')}}" alt="" class="d-inline-block align-text-top img-fluid">
  </div>

  <div class="container-fluid">
    <a class="navbar-brand {{ request()->routeis('home')? : 'active'}}" aria-current="page"
      href="{{route('home')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link @if (request()->routeIs('comics.index')) active @endif" href="{{route('comics.index')}}">Comics</a>
        </li>
        <li class="nav-item"> <a class="nav-link" href="#">Characters</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Movies</a></li>

        <li class="nav-item"> <a class="nav-link" href="#">Shop</a></li>


      </ul>
    </div>
  </div>
</nav>