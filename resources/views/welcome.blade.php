@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center">Dash</div>
        <div class="card-block text-center">
            <svg viewBox="0 0 960 210">
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="80%">mDev </text>
                </symbol>
                <g class = "g-ants">
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                    <use xlink:href="#s-text" class="text-copy"></use>
                </g>
            </svg>
        </div>
    </div>
@endsection
