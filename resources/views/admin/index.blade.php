@extends('layouts.app')

@section('title') - Administrator page! @endsection

@section('content')
    <!--Admin page sidebar meniu -->
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-dark sidebar">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link btn-danger text-white"  href="{{ url('/admin') }}"><i class="fa fa-tachometer fa-1x text-white" aria-hidden="true"></i> Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('/admin/upload') }}"><i class="fa fa-upload fa-1x text-danger" aria-hidden="true"></i> Upload new work</a>
            </li>
            </l class="nav-item">
                <a class="nav-link  text-white" href="#"><i class="fa fa-pencil fa-1x text-danger" aria-hidden="true"></i> Edit a work</a>
            </li>
        </ul>
    </nav>
@endsection