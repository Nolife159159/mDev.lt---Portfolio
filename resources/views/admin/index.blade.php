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

            <div class="col-3 bg-gradient-dark">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active btn-danger text-white" id="home-tab" data-toggle="pill" href="#v-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-dashcube fa-1x" aria-hidden="true"></i> Overview</a>
                    <a class="nav-link text-white" id="upload-tab" data-toggle="pill" href="#v-upload" role="tab" aria-controls="v-pills-upload" aria-selected="false"><i class="fa fa-upload fa-1x" aria-hidden="true"></i> Upload new work</a>
                    <a class="nav-link text-white" id="edit-tab" data-toggle="pill" href="#v-edit" role="tab" aria-controls="v-pills-edit" aria-selected="false"><i class="fa fa-pencil fa-1x" aria-hidden="true"></i> Edit a work</a>
                    <a class="nav-link text-white" id="messages-tab" data-toggle="pill" href="#v-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-comments fa-1x" aria-hidden="true"></i> Messages</a>
                    <a class="nav-link text-white" id="settings-tab" data-toggle="pill" href="#v-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog fa-1x" aria-hidden="true"></i> Settings</a>
                </div>
            </div>
            <div class="col-9 m-0 p-0 border-left-0 border-right-0 border-bottom-0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active bg-gradient-secondary m-0 p-0" id="v-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @component('components.overview')
                            @slot('title')
                                Overview panel
                            @endslot
                        <br/>
                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#worksC" aria-expanded="false" aria-controls="worksC">
                            Works uploaded <span class="badge badge-light">{{ $works }}</span>
                        </button>

                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#usersC" aria-expanded="false" aria-controls="usersC">
                            Users registered <span class="badge badge-light">{{ $users }}</span>
                        </button>
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-upload" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @component('components.upload')
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        @component('components.messages')
                            @slot('title')
                                Messages panel
                            @endslot
                        <p class="lead">Under construction!</p>
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-edit" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        @component('components.edit')
                            @slot('title')
                                Edit panel
                            @endslot
                            <p class="lead">Under construction!</p>
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        @component('components.settings')
                            @slot('title')
                                Settings panel
                            @endslot
                        <p class="lead">Under construction!</p>
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection