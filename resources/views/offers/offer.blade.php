@extends('layouts/main')
@section('content')
    <main role="main" class="flex-shrink-0 mt-4">
        <div class="container">
            <div class="card mb-4 w-75">
                <img src="/images/home.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$show->title}}</h5>
                    <strong class="d-inline-block mb-2 text-success">{{$show->price}} {{$show->currency}}</strong>
                    <p class="card-text">{{$show->description}}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{$show->updated_at}}</small></p>
                    <a class="nav-link" href="{{route('offers')}}">Оголошення</a>
                </div>
            </div>
        </div>
    </main>

@stop
