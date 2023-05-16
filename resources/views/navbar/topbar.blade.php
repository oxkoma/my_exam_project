<nav class="navbar navbar-expand-lg bg-primary bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Главная</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('list') }}">Студенты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">О проекте</a>
        </li> 
         </ul>
         <div class="float-end">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-end">
      <li class="nav-item float-end">
          <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Вход</a>
        </li>
        <li class="nav-item float-end">
          <a class="nav-link" href="{{ url('registration') }}">Registration</a>
        </li>
        </ul>
</div>
     
     </>
  </div>
</nav>