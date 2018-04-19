@extends('layouts.app')

@section('title', ' - About mDev')

@section('content')
    <div class="mx-auto welcome">
        <div class="content-text text-center text-white">
            <div class="span hello-text mb-4">
                HELLO, WORLD!
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function() {
            $("html").css({'background-color': '#444' });
            $("html").css('background-image', 'none');
        });
    </script>
@endsection