@extends('layouts.app')

@section('title', ' - mDev works!')

@section('content')
    <div class="bd-example-row">
        <div class="p-5 m-0 bg-gradient-dark">
            <h1 class="display-4">Hello, again!</h1>
            <p class="lead">Here your find our gallery and portfolio.</p>
        </div>
        <div class="m-0 pt-2 pb-2 row bg-gradient-dark clearfix">
            @if (!count($works))
                <h1 class="display-4">Sorry we cant find any jobs..</h1>
            @else
                @foreach ($works AS $work)
                    @php
                        $array = json_decode($work->image_url, true);
                        $randomImage = $array[rand(0, count($array) - 1)];
                    @endphp
                    <img data-id="{{ $work->id }}" data-toggle="modal" data-target=".bd-example-modal-sm"
                         src="{{ asset(str_replace('work/', '', $randomImage)) }} "
                         class="m-1 rounded d-block border border-secondary float-left work-block" alt="...">
                    @php
                        $array = $randomImage = null;
                    @endphp
                @endforeach
            @endif
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <b>Description:</b>
                    <div id="img-description" class="d-inline font-weight-bolder"></div>
                        <!-- Carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators"></ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner"></div>
                            <!-- Controls -->
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <b>Used languages:</b>
                    <div id="img-lang" class="d-inline font-weight-bolder"></div>
                    <br>
                    <b>Coded by:</b>
                    <div id="img-by" class="d-inline font-weight-bolder"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
       var workData = '@php echo $workModalList; @endphp';
    </script>
@endsection