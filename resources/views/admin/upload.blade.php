@extends('layouts.app')

@section('title') - Upload page for work! @endsection

@section('content')
    <div class="container-fluid">
        <div  class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-dark sidebar h-100">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white"  href="{{ url('/admin') }}"><i class="fa fa-tachometer fa-1x text-danger" aria-hidden="true"></i> Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-danger text-white" href="{{ url('/admin/upload') }}"><i class="fa fa-upload fa-1x text-white" aria-hidden="true"></i> Upload new work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="#"><i class="fa fa-pencil fa-1x text-danger" aria-hidden="true"></i> Edit a work</a>
                    </li>
                </ul>
            </nav>
            <form class="col-sm-9 ml-sm-auto col-md-10 m-0 p-0">
                <div class="bd-example-row">
                    <div class="m-0 row bg-gradient-secondary">
                        {{ csrf_field() }}
                        <div class="col-sm-6">
                            <div class="row m-0">
                                <div class="col bg-transparent border-0">
                                    <label for="name">Job name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name">
                                </div>
                                <div class="col bg-transparent border-0">
                                    <label for="langs">Job langs</label>
                                    <input type="text" class="form-control" placeholder="Lang's" id="langs">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">Job description</label>
                                <textarea class="form-control" id="desc" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col bg-transparent border-0 pt-2 mt-1">
                                <div class="form-group files">
                                    <label>Upload Or Drag files</label>
                                    <input type="file" class="form-control" multiple="">
                                </div>
                            </div>
                            <button type="button" class="mt-5 btn btn-danger btn-lg btn-block">Post new work</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection