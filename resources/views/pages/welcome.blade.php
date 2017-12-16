@extends('layouts.app')

@section('title') - Welcome page @endsection

@section('content')
    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">We #love #coding.</p>
        <p>Check work below!</p>
        <p class="lead">
            <a class="btn btn-danger btn-lg" href="{{ url('/our-work') }}" role="button">Take me there!</a>
        </p>
    </div>
@endsection
