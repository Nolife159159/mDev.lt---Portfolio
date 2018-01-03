<div class="m-0 p-5">
    @if (isset($title))
        <h1 class="display-4">{{ $title }}</h1>
    @endif

    <button type="button" class="btn btn-danger mb-3" data-toggle="collapse" data-target="#inbox" aria-controls="inbox">
        Orders <span class="badge badge-light">{{ $contacts->count() }}</span>
    </button>

    <div class="collapse show" id="inbox">
        <div class="card text-white bg-secondary border border-danger">
            <div class="card-header border border-danger">
                {{ $title }}
            </div>
            <div class="card-body p-1 bg-dark">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts AS $contact)
                                    <tr>
                                        <td>#{{ $contact->id }}</td>
                                        <td>{{ $contact->username }}</td>
                                        <td>{{ $contact->mail }}</td>
                                        <td>{{ $contact->service }}</td>
                                        <td>{{ $contact->comment }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td><a class="btn btn-mini btn-danger" title="Read"><i class="fa fa-eye"></i></a> <a class="btn btn-mini btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>