@extends('layouts.app')

@section('title') - Administrator page! @endsection

@section('content')
    <form>
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
@endsection