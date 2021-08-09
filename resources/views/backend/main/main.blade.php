@include('backend/inc/header');

@include('backend/inc/sidebar');


<div class="body_content">
	
	@if(session()->has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
	        {{ session('message') }}
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
	    </div>
	 @endif
	@yield('main_content')
</div>	

@include('backend/inc/footer');