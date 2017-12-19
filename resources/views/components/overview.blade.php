<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-3">{{ $title }}</h1>
    @endif
        {{ $slot }}

        <div class="collapse" id="worksC">
            <div class="card text-white bg-dark mb-3 mt-3">
                <div class="card-header">
                    Works
                </div>
                <div class="card-body">
                    Work list..
                </div>
            </div>
        </div>

        <div class="collapse" id="usersC">
            <div class="card text-white bg-dark">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    User list..
                </div>
            </div>
        </div>
</div>