@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Uredi | {{ $hotel->hotel_name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hotel.update', $hotel->id) }}">
                        <div class="form-group">
                            <label for="hotel_name">{{ __('Naziv hotela') }}</label>

                            <div class="form-group">
                                 <input type="text" class="form-control @error('hotel_name') is-invalid @enderror" name="hotel_name" value="{{ $hotel->hotel_name }}" required>

                                @error('hotel_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="general">{{ __('Opcenito') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('general') is-invalid @enderror" name="general" rows="4" required>{{ $hotel->general }}</textarea>

                                @error('general')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="position">{{ __('Polozaj') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('position') is-invalid @enderror" name="position" rows="4" required>{{ $hotel->position }}</textarea>

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="accommodation">{{ __('Smjestaj') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('accommodation') is-invalid @enderror" name="accommodation" rows="4" required>{{ $hotel->accommodation }}</textarea>

                                @error('accommodation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="service">{{ __('Usluga') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('service') is-invalid @enderror" name="service" rows="4" required>{{ $hotel->service }}</textarea>

                                @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="content">{{ __('Sadrzaj') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="4" required>{{ $hotel->content }}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="beach">{{ __('Plaza') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('beach') is-invalid @enderror" name="beach" rows="4" required>{{ $hotel->beach }}</textarea>

                                @error('beach')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="sports_fun">{{ __('Sport i zabava') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('sports_fun') is-invalid @enderror" name="sports_fun" rows="4" required>{{ $hotel->sports_fun }}</textarea>

                                @error('sports_fun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="notice">{{ __('Napomena') }}</label>

                            <div class="form-group">
                                 <textarea class="form-control @error('notice') is-invalid @enderror" name="notice" rows="4" required>{{ $hotel->notice }}</textarea>

                                @error('notice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label for="url">{{ __('Web adresa') }}</label>

                            <div class="form-group">
                                 <input type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $hotel->url }}" required>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                        <div class="form-group mt-3 row justify-content-center">
                            <button type="submit" class="btn btn-primary col-md-6">
                                {{ __('Uredi') }}
                            </button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection