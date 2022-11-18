@extends('layouts.app')
@section('content')
@if($hotels->count() > 0)
<div class="container">
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
		{{ $hotels->appends(['term' => $term])->links() }}
	</div>
</div>
@else
<div class="container d-flex justify-content-center">
	<h4>0 hotels found.</h4>
</div>
@endif
@endsection