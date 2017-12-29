<form action="{{ action('UploadController@store') }}" method="POST" enctype="multipart/form-data">
    <div class="row bg-gradient-secondary m-0 p-5">
        {{ csrf_field() }}
        @if (isset($title))
            <div class="col-12">
                <h1 class="display-4">{{ $title }}</h1>
            </div>
        @endif
        <div class="col-sm-6">
            <div class="row m-0">
                <div class="col bg-transparent border-0">
                    <label for="name">Job name</label>
                    <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                </div>
                <div class="col bg-transparent border-0">
                    <label for="langs">Job langs</label>
                    <input type="text" class="form-control" placeholder="Lang's" id="langs" name="langs">
                </div>
            </div>
            <div class="form-group">
                <label for="desc">Job description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="col bg-transparent border-0 pt-2 mt-1">
                <div class="form-group files">
                    <label>Select Or Drag <b>photos</b></label>
                    <input type="file" name="photos[]" class="form-control" multiple="">
                </div>
            </div>
            <button type="submit" class="mt-5 btn btn-danger btn-lg btn-block">Post new work</button>
        </div>
    </div>
</form>