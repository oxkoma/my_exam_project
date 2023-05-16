@if($data)
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="bg-primary bg-gradient bg-opacity-75 min-vh-100">
      
        <a class="d-flex text-decoration-none text-white align-items-center">
          <span class="fs-4 d-none d-sm-inline">Side Menu</span>
        </a>
        <nav class="nav flex-column" >
          @foreach($data as $item) 
            <a class="nav-link  {{ Request::url()==url('list/'.$item->id) ? 'link-dark' : 'link-light' }}" href="{{ url('list/'.$item->id) }}">{{ $item->name }}</a>
          @endforeach
		  <a class="nav-link  {{ Request::url()==url('list') ? 'link-dark' : 'link-light' }}" href="{{ url('list') }}">All</a>
		</nav>
      
    </div>
  </div>
</div>
@endif