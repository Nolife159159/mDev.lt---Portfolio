<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif
    {{ $slot }}
</div>