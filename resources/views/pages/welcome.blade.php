@extends('layouts.app')

@section('title', ' - Welcome page')

@section('content')
    <div class="mx-auto welcome">
        <div class="content-text text-center text-white">
            <div class="span hello-text mb-4">
                HELLO, WORLD!
            </div>

            <div class="group-text">
                <div>We can create websites!</div>
                <div class="mb-3">We can create website designs!</div>

                <div>We can create work management programs!</div>
                <div class="mb-3">We can create shop websites!</div>

                <div>We can install and prepare servers work work!</div>
                <div class="mb-3">We can install https protocol for your server!</div>

                <div>We can fix your broken servers!</div>
                <div class="mb-3">We can help to migrate to other server!</div>
            </div>

            <a href="{{ url('/our-work') }}" class="btn btn btn-outline-light btn-lg rounded-0 mt-5 pl-4 pr-4">Check our work</a>
        </div>
    </div>
@endsection
