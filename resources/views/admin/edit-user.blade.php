@extends('layouts.app')

@section('title', ' - User edit')

@section('content')
    <div class="bg-dark">
        <div class="row m-0">
            @if ($errors->any())
                <div class="col-12 bg-gradient-danger">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() AS $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="col-12 bg-gradient-success">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <ul>
                            <li>{{ $message }}</li>
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <form action="{{ action('AdminController@storeUser', $user->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="row m-0 p-3">
                <div class="col-12 bg-gradient-dark">
                    <h3 class="text-white">Editing {{ $user->email }} <span class="text-danger">id, {{ $user->id }}</span></h3>
                    <span class="text-white">{{ $user->name }} registered at {{ $user->created_at }}</span>
                    <button type="submit" class="btn btn-danger btn-lg btn-block">Save changes</button>
                </div>

                <div class="col-12 col-sm-6 col-md-5 text-white">
                    <label for="name">User name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name">
                </div>

                <div class="col-12 col-sm-6 col-md-5 text-white">
                    <label for="name">User email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" id="name" name="email">
                </div>
            </div>
        </form>
    </div>
@endsection