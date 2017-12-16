@extends('layouts.app')

@section('title') - Welcome page @endsection

@section('content')
    <div class="bd-example-row">
        <div class="p-5 m-0 bg-gradient-secondary">
        <div class="jumbotron bg-gradient-secondary">
            <h1 class="display-3">Hello, world!</h1>
            <p class="lead">We #love #coding.</p>
            <p>Check work below!</p>
            <p class="lead">
                <a class="btn btn-danger btn-lg" href="{{ url('/our-work') }}" role="button">Take me there!</a>
            </p>
        </div>
    </div>
@endsection
