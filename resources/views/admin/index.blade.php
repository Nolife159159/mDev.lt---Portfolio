@extends('layouts.app')

@section('title') - Administrator page! @endsection

@section('content')
    <!--Admin page sidebar meniu -->
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link btn-danger" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/upload') }}">Upload new work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Edit a work</a>
            </li>
        </ul>
    </nav>
@endsection