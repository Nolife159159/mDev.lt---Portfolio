@extends('layouts.app')

@section('title', ' - Contact us')

@section('content')
    <div class="MainContent">
        <form action="{{ action('ContactController@store') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-5 mb-4">
                    <div class="card border-danger rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-danger text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                <p class="m-0">We'll write rarely, but only the best content.</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="text-line" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="text-line" name="mail" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" class="text-line" name="service" placeholder="Service name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2 mb-sm-0">
                                    <textarea class="text-line"  name="comment" placeholder="Your comment"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger btn-block rounded-0 py-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
