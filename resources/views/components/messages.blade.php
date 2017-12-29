<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif

    <button type="button" class="btn btn-danger">
        Inbox <span class="badge badge-light">0</span>
    </button>

    <button type="button" class="btn btn-danger">
        Outbox <span class="badge badge-light">0</span>
    </button>
</div>