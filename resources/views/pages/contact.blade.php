@extends('layouts.app')

@section('title', ' - Contact us')

@section('content')
        <div class="bg-gradient-dark 5-3">
            @component('components.inputs')
            @endcomponent
            <section class="container">
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
                                        <label>Your name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon bg-light"><i class="fa fa-user text-danger"></i></div>
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your email</label>
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon bg-light"><i class="fa fa-envelope text-danger"></i></div>
                                            <input type="text" class="form-control" name="mail" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Service</label>
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon bg-light"><i class="fa fa-tag prefix text-danger"></i></div>
                                            <input type="text" class="form-control" name="service" placeholder="Service name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Description</label>
                                        <div class="input-group mb-2 mb-sm-0">
                                            <div class="input-group-addon bg-light"><i class="fa fa-pencil text-danger"></i></div>
                                            <textarea class="form-control"  name="comment" placeholder="Your comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger btn-block rounded-0 py-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="col-lg-7">
                        <div class="mb-4">
                        </div>
                        <div class="row text-center">
                            <div class="col-md-4 text-white">
                                <a class="bg-danger px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-skype"></i></a>
                                <p>Nelixus: nelixus159<br>Katum: katumcwap</p>
                            </div>
                            <div class="col-md-4 text-white">
                                <a class="bg-danger px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                                <p>Nelixus: <br>Katum: </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
