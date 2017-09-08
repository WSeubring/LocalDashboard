@extends('layouts.welcome')

@section('content')
    <div class="title m-b-md">
        {{ config('app.name') }}
    </div>

    <div>
        <button type="button" class="button btn-information" onclick="window.location='{{ route("login") }}'">
            {{ __('views.welcome.login')}}
        </button>
    </div>
@endsection