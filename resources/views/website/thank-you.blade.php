@extends('layouts.website.site')
@section('content')
    <h2 class="text-center h2">Thank You!</h2>
    <div class="row justify-content-md-center">
        <div class="container">
            <x-error-message></x-error-message>
            <x-flash-message></x-flash-message>
        </div>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <div class="card">
            <div class="card-body text-center">
                <h3 class="h3">Your tag profile has been submitted.</h3>
                <a href="{{ url('/search') }}" class="btn btn-primary">Back to Hompage</a>
            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-md-center" style=" position: absolute;
    bottom: 0;
    ">
        <p>{{ setting()->footer_text ?? 'Copyright @ TagiMagi' }}</p>
    </div>

@endsection