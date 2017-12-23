<div class="m-0 p-3">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif
        {{ $slot }}

        <div class="collapse show" id="worksC">
            <div class="card text-white bg-secondary mb-3 mt-3">
                <div class="card-header">
                    Works
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($work_list AS $work_info)
                            <div class="col bg-dark">
                                #{{ $work_info->id }}, {{ $work_info->name }} <br/>
                                <div class="btn-group" role="group">
                                    <a href="{{ url('/admin/work-edit/'.$work_info->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ url('/admin/work-delete/'.$work_info->id) }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse show" id="usersC">
            <div class="card text-white bg-secondary mb-3 mt-3">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($user_list AS $user_info)
                            <div class="col bg-dark">
                                #{{ $user_info->id }}, {{ $user_info->name }} <br/>
                                <div class="btn-group" role="group">
                                    <a href="{{ url('/admin/user-edit/'.$user_info->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ url('/admin/work-delete/'.$user_info->id) }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>