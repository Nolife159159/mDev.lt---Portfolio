@extends('layouts.app')

@section('title', ' - Administrator page!')

@section('content')
        <div class="bd-example-row bg-dark">
            <div class="row m-0">
                @if ($errors->any())
                    <div class="col-12 bg-gradient-danger">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() AS $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="col-12 bg-gradient-success">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <ul>
                                <li>{{ $message }}</li>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif

                    <div class="col">
                        <div class="nav flex-md-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active btn-danger text-white d-block" id="home-tab" data-toggle="pill" href="#v-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-dashcube fa-1x" aria-hidden="true"></i> Overview</a>
                            <a class="nav-link text-white d-block" id="upload-tab" data-toggle="pill" href="#v-upload" role="tab" aria-controls="v-pills-upload" aria-selected="false"><i class="fa fa-upload fa-1x" aria-hidden="true"></i> Upload new work</a>
                            <a class="nav-link text-white d-block" id="messages-tab" data-toggle="pill" href="#v-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-comments fa-1x" aria-hidden="true"></i> Orders</a>
                            <a class="nav-link text-white d-block" id="settings-tab" data-toggle="pill" href="#v-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog fa-1x" aria-hidden="true"></i> Settings</a>
                        </div>
                    </div>

                    <div class="col-sm-auto col-sm-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active bg-gradient-secondary m-0 p-0" id="v-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                @component('components.overview')
                                    @slot('title', 'Overview panel')
                                    @slot('work_list', $works)
                                    @slot('user_list', $users)
                                @endcomponent
                            </div>
                            <div class="tab-pane fade bg-gradient-secondary" id="v-upload" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                @component('components.upload')
                                    @slot('title', 'Upload new work')
                                @endcomponent
                            </div>
                            <div class="tab-pane fade bg-gradient-secondary" id="v-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                @component('components.orders')
                                    @slot('title', 'Orders panel')
                                @endcomponent
                            </div>
                            <div class="tab-pane fade bg-gradient-secondary" id="v-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                @component('components.settings')
                                    @slot('title', 'Settings panel')
                                <p class="lead">Under construction!</p>
                                @endcomponent
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection