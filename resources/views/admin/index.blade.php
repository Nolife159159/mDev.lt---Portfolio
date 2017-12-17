@extends('layouts.app')

@section('title') - Administrator page! @endsection

@section('content')
    <div class="bd-example-row bg-dark">
        <div class="row m-0">
            <div class="col-3 bg-gradient-dark">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active btn-danger text-white" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-dashcube fa-1x" aria-hidden="true"></i> Overview</a>
                    <a class="nav-link text-white" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-upload fa-1x" aria-hidden="true"></i> Upload new work</a>
                    <a class="nav-link text-white" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-comments fa-1x" aria-hidden="true"></i> Messages</a>
                    <a class="nav-link text-white" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-cog fa-1x" aria-hidden="true"></i> Settings</a>
                </div>
            </div>
            <div class="col-9 m-0 p-0 border-left-0 border-right-0 border-bottom-0">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active bg-gradient-secondary m-0 p-0" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @component('components.overview')
                            @slot('title')
                                Overview panel
                            @endslot
                    <p class="lead">Under construction!</p>
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @component('components.upload')
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        @component('components.messages')
                            @slot('title')
                                Messages panel
                            @endslot
                        <p class="lead">Under construction!</p>
                        @endcomponent
                    </div>
                    <div class="tab-pane fade bg-gradient-secondary" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
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