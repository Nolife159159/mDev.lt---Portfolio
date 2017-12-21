<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-3">{{ $title }}</h1>
    @endif
        {{ $slot }}

        <div class="collapse show" id="worksC">
            <div class="card text-white bg-gradient-dark mb-3 mt-3">
                <div class="card-header">
                    Works
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($work_list AS $work_info)
                            <div class="col-2">
                                {{ $work_info->name }} {{ $work_info->created_at }}
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ url('/admin/work-edit/'.$work_info->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ url('/admin/work-delete/'.$work_info->id) }}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse show" id="usersC">
            <div class="card text-white bg-gradient-dark mb-3 mt-3">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($user_list AS $user_info)
                            <div class="col-2">
                                {{ $user_info->name }} {{ $user_info->created_at }}
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>