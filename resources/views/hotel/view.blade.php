@extends('layouts.app')
@section('content')
<h1 class="text-primary">B2C Template</h1>
{{ $hotel->b2cTemplate() }}
<hr>
<h1 class="text-primary">B2B Template</h1>
{{ $hotel->b2bTemplate() }}
@endsection
