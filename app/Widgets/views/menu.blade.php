@if($data)
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="bg-primary bg-gradient bg-opacity-75 min-vh-100">
      
        <a class="d-flex text-decoration-none text-white align-items-center">
          <span class="fs-4 d-none d-sm-inline">Side Menu</span>
        </a>
        <nav class="nav flex-column" >
          @foreach($data as $item) 
            <a class="nav-link  {{ Request::url()==route($item->action) ? 'link-dark' : 'link-light' }}" href="{{ route($item->action) }}">{{ $item->name }}</a>
          @endforeach
        </nav>
      
    </div>
  </div>
</div>
@endif