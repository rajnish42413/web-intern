@if (session('success'))
 <div class="alert alert-success my-2 alert-dismissible fade show" role="alert">
	{{ session('success') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
@endif

@if (session('error'))
 <div class="alert alert-danger my-2 alert-dismissible fade show" role="alert">
	{{ session('error') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>

	@if (session('actions'))
		<hr>
	  <p class="mb-0">
	  	@foreach (session('actions') as $action)
	  		<a href="{{$action['href']}}" class="btn btn-primary">{{$action['label']}}</a>
	  	@endforeach
	  </p>
	@endif
  </div>
@endif



@if (session('info'))
<div class="alert alert-info my-2 alert-dismissible fade show" role="alert">
	{{ session('info') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
  </div>
@endif

