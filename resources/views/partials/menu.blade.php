<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->getName() == 'home' ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home')}}">Home</a>
        </li>
        <li class="nav-item {{ Request::route()->getName() == 'students.index' ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('students.index')}}">Studenti</a>
        </li>
        <li class="nav-item {{ Request::route()->getName() == 'students.create' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('students.create')}}">Aggiungi</a>
          </li>
      </ul>
      {{-- {{Request::route()->getName()}} --}}
    </div>
  </nav>
