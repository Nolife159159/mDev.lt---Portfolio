@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-footer card-header text-center">About mDev</div>
        <div class="card-body "><h4 class="card-title text-center">Some text.</h4></div>
        <div class="card-header text-center">What we are</div>
        <div class="card-body"><h4 class="card-title text-center">Members</h4></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h4 class="card-header bg-dark text-white">Katum
                        <div class="float-right small">
                            <a class="btn btn-raised btn-danger" href="#" title="" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-raised btn-danger" href="#" title="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-raised btn-danger" href="#" title="">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </div>
                    </h4>
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
                    <h4 class="card-header text-right bg-dark text-white">Nelixus
                        <div class="float-left small">
                            <a class="btn btn-raised btn-danger" href="#" title="" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-raised btn-danger" href="#" title="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-raised btn-danger" href="#" title="">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </div>
                    </h4>
                    <div class="card-body">
                        <div class="image float-right user-r">
                            <img src="http://31.media.tumblr.com/tumblr_lw2lhqjrel1qfmi03o9_r1_500.gif" class="img-thumbnail" alt="avatar"/>
                        </div>
                        <h4 class="card-title">Info About this member</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam facilis qui maiores quaerat perspiciatis? Non alias a iste similique ab nesciunt cum ad tempore. Architecto dolore est explicabo deleniti porro.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer card-header text-center">What do we do?</div>
        <div class="card-body "><h4 class="card-title text-center">Some text.</h4></div>
    </div>
@endsection
