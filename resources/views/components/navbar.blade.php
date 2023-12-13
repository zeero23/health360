<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/Fitur.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Health360
    </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav">
  <li class="nav-item {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page"  href="{{ route('homepage') }}">Home</a>
  </li>
  <li class="nav-item {{ Route::currentRouteName() == 'services' ? 'active' : '' }}">
    <a class="nav-link" aria-current="page"  href="{{ route('services') }}">Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Medicine</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Article</a>
  </li>
</ul>
</div>
</div>
</nav>

<style>
  .nav-item.active a {
      font-weight: bold;
      color: #51CCC1; 
    }
</style>