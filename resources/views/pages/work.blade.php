@extends('layouts.app')

@section('title') - mDev works! @endsection

@section('content')
    <div class="bd-example-row">
        <div class="p-5 m-0 bg-gradient-secondary">
            <h1 class="display-4">Hello, again!</h1>
            <p class="lead">Here your find our gallery and portfolio.</p>
        </div>
        <div class="m-0 p-2 row bg-gradient-secondary clearfix">
            @foreach ($works AS $work)
                <img data-id="{{ $work->id }}"
                    data-toggle="modal"
                        data-target=".bd-example-modal-sm"
                    src="{{ $work->image_url }}"
                    class="m-1 rounded d-block border border-secondary float-left"
                    alt="...">
            @endforeach
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- body -->
                <div class="modal-body">
                    <div id="img-id" class="d-inline font-weight-bolder"></div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://dummyimage.com/200" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://dummyimage.com/200" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://dummyimage.com/200" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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