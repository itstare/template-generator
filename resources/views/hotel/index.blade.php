@extends('layouts.app')
@section('content')
<div class="container">
	 @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    		{{ session('status') }}
    		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
     @endif
	<ul class="list-group list-group-flush">
		@foreach($hotels as $hotel)
		<li class="list-group-item">
			<div class="row">
				<div class="col-md-8">
					<h3>{{ $hotel->hotel_name }}</h3>
				</div>

				<div class="col-md-4 d-flex justify-content-end">
					<a href="{{ route('hotel.view', $hotel->id) }}" class="btn btn-primary">Template</a>
					<a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-warning ms-2">Uredi</a>
					<a href="{{ route('hotel.delete', $hotel->id) }}" class="btn btn-danger ms-2">Izbrisi</a>
				</div>
			</div>
		</li>
		@endforeach
	</ul>

	<div class="d-flex justify-content-center mt-4">
		{{ $hotels->links() }}
	</div>
</div>
@endsection