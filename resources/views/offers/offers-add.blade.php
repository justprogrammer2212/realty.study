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
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : '' }}" name="title"  placeholder="Enter title">
                        @if ($errors->has('title'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                        <small id="emailHelp" class="form-text text-muted">title</small>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" name="price"  placeholder="Enter price">
                        @if ($errors->has('price'))
                            <span class="text-danger">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                        <small id="emailHelp" class="form-text text-muted">price</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Currency</label>
                        <select name="currency" class="form-control">
                            @foreach(\App\Models\Offers::$offer_currency as $currency)
                                <option value="{{$currency}}" name="currency">{{$currency}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">currency</small>
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
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category" class="form-control">
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Users</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Users</label>
                        <select name="user" class="form-control">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">users</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
@stop
