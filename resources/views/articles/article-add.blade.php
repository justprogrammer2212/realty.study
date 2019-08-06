@extends('layouts/main')
@section('content')
    <p class="mt-5"></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Enter title">
                        @if ($errors->has('title'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                        <small id="emailHelp" class="form-text text-muted">title</small>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                        @if ($errors->has('description'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                        <small id="emailHelp" class="form-text text-muted">description</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Users</label>
                        <select name="user" class="form-control">
                            @if ($errors->has('user_id'))
                                <span class="text-danger">
                            <strong>{{ $errors->first('user_id') }}</strong>
                        </span>
                            @endif
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">users</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Додати статтю</button>
                </form>
            </div>

        </div>
    </div>
@stop
