@extends('layouts.app')

@section('title', ' - About mDev')

@section('content')
    <div class="MainContent">
        <div class="bd-example-row">
            <div class="row bg-gradient-dark">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="d-inline">Katum</h4>
                            <div class="float-right">
                                <a class="btn btn-danger" href="#" title="" data-toggle="tooltip" data-placement="top">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" href="#" title="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" href="#" title="">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="image float-left user-l">
                                <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
                            </div>
                            <h4 class="card-title">Info About this member</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facilis qui maiores quaerat perspiciatis? Non alias a iste similique ab nesciunt cum ad tempore. Architecto dolore est explicabo deleniti porro.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h4 class="d-inline float-right">Nelixus</h4>
                            <div class="float-left">
                                <a class="btn btn-danger" href="#" title="" data-toggle="tooltip" data-placement="top">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" href="#" title="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" href="#" title="">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="image float-left user-l">
                                <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
                            </div>
                            <h4 class="card-title">Info About this member</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facilis qui maiores quaerat perspiciatis? Non alias a iste similique ab nesciunt cum ad tempore. Architecto dolore est explicabo deleniti porro.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card bg-gradient-dark text-secondary">
                        <div class="card-header text-center">
                            What do we do?
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Some text.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
