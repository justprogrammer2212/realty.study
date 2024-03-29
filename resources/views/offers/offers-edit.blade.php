@extends('layouts/main')
@section('content')
    <p class="mt-5"></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">

                <form action="{{route('updateOffer', $offers_id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">title</label>
                        <input type="text" value="{{$offers_id->title}}" class="form-control" name="title"  placeholder="Enter title">
                            <span class="text-danger">
                        </span>
                        <small id="emailHelp" class="form-text text-muted">title</small>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input value="{{$offers_id->price}}" type="text" class="form-control" name="price"  placeholder="Enter price">
                        <small id="emailHelp" class="form-text text-muted">price</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Currency</label>
                        <select name="currency" class="form-control">
                            @foreach(\App\Models\Offers::$offer_currency as $currency)
                                <option {{$offers_id->currency == $currency ? 'selected' : ''}} value="{{$currency}}" name="currency">{{$currency}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">currency</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="description" class="form-control">{{$offers_id->description}}</textarea>
                        <small id="emailHelp" class="form-text text-muted">description</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category" class="form-control">
                            @foreach($categories as $cat)
                                <option {{$offers_id->category_id == $cat->id ? 'selected' : ''}} value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Users</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Users</label>
                        <select name="user" class="form-control">
                            @foreach($users as $user)
<<<<<<< HEAD
                                <option {{$offers_id->user_id == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
=======
                                <option {{$offers->user_id == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
>>>>>>> origin/master
                        </select>
                        <small id="emailHelp" class="form-text text-muted">users</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<<<<<<< HEAD
=======

>>>>>>> origin/master
@stop
