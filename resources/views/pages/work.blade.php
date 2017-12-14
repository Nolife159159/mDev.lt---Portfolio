@extends('layouts.app')

@section('content')
    <div class="bd-example-row">
        <div class="m-0 row bg-gradient-dark">
            @foreach ($works AS $work)
                <img data-id="{{ $work->id }}" data-toggle="modal" data-target=".bd-example-modal-sm" src="{{ $work->image_url }}" class="m-1 rounded mx-auto d-block border border-secondary" alt="...">
            @endforeach
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    You opened image with id <div id="img-id" class="d-inline font-weight-bolder"></div>.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
