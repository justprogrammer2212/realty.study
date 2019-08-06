@extends('layouts/main')
@section('content')
    <p class="mt-5"></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <form action="{{route('updateArticle', $article_id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input value="{{$article_id->title}}" type="text" class="form-control" name="title"  placeholder="Enter title">
                        <small id="emailHelp" class="form-text text-muted">title</small>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control">{{$article_id->description}}</textarea>
                        <small id="emailHelp" class="form-text text-muted">description</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Users</label>
                        <select name="user" class="form-control">
                            @foreach($users as $user)
                                <option {{$article_id->user_id == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">users</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Оновити статтю</button>
                </form>
            </div>

        </div>
    </div>
@stop
