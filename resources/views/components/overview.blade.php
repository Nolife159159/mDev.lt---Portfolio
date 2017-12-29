<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif

        <br/>
        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#worksC" aria-controls="worksC">
            Works uploaded <span class="badge badge-light">{{ $work_list->count() }}</span>
        </button>

        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#usersC" aria-controls="usersC">
            Users registered <span class="badge badge-light">{{ $user_list->count() }}</span>
        </button>

        <div class="collapse show" id="worksC">
            <div class="card text-white bg-secondary border border-danger mb-3 mt-3">
                <div class="card-header border border-danger">
                    Works
                </div>
                <div class="card-body bg-dark">
                    <div class="row">
                        @foreach ($work_list AS $work_info)
                            <div class="col bg-dark p-2">
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
            <div class="card text-white bg-secondary border border-danger mb-3 mt-3">
                <div class="card-header border border-danger">
                    Users
                </div>
                <div class="card-body bg-dark">
                    <div class="row">
                        @foreach ($user_list AS $user_info)
                            <div class="col bg-dark p-2">
                                #{{ $user_info->id }}, {{ $user_info->name }} <br/>
                                <div class="btn-group" role="group">
                                    <a href="{{ url('/admin/user-edit/'.$user_info->id) }}" class="btn btn-outline-warning">Edit</a>
                                    <a href="{{ url('/admin/user-delete/'.$user_info->id) }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>