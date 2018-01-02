<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif

    <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#inbox" aria-controls="inbox">
        Orders <span class="badge badge-light">0</span>
    </button>

    <div class="collapse show" id="inbox">
        <div class="card text-white bg-secondary border border-danger mb-3 mt-3">
            <div class="card-header border border-danger">
                Orders
            </div>
            <div class="card-body bg-dark">
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>From</th>
                                <th>Email</th>
                                <th>Messages title</th>
                                <th>Sent Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>sadsadasdasdasdasdasdasdsad</td>
                                <td>2017/12/30 12:30</td>
                                <td><a class="btn btn-mini btn-danger" title="Read"><i class="fa fa-eye"></i></a> <a class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>#2</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td>sadsadasdasdasdasdasdasdsad</td>
                                <td>2017/12/30 12:30</td>
                                <td><a class="btn btn-mini btn-danger" title="Read"><i class="fa fa-eye"></i></a> <a class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>