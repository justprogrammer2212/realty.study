@extends('layouts/main')
@section('content')
    <main role="main" class="flex-shrink-0 mt-3">
        <div class="container">
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">Продаж квартир</a>
                    <a class="p-2 text-muted" href="#">Продаж будинків</a>
                    <a class="p-2 text-muted" href="#">Оренда квартир</a>
                    <a class="p-2 text-muted" href="#">Оренда будинків</a>
                    <a class="p-2 text-muted" href="#">Продаж землі</a>
                </nav>
            </div>

            <div class="jumbotron p-4 p-md-5 text-dark rounded bg-light">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Продаж будинків</h1>
                    <p class="lead my-3">Тут розміщені будинки які на нашу думку найкраще підходять для Вашого
                        проживання</p>
                    <p class="lead mb-0"><a href="#" class="text-dark font-weight-bold">Читати далі...</a></p>
                </div>
            </div>

            <div class="row mb-2">
                @foreach($offers as $offer)
                    <div class="col-md-6">
                        <div
                            class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong
                                    class="d-inline-block mb-2 text-success">{{$offer->price}} {{$offer->currency}}</strong>
                                <h3 class="mb-0">{{$offer->name}}</h3>
                                <div class="mb-1 text-muted">{{$offer->created_at}}</div>
                                <p class="card-text mb-auto">{{strlen($offer->description) >= 100 ? substr($offer->description,0,200). '...' : $offer->description}}</p>

                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="/images/home.jpg" class="img-thumbnail alt=" ...">
                                <p class="text-center mt-3 mb-2">
                                    <a class="btn btn-outline-primary" href="{{route('show', $offer)}}">Читати
                                        оголошення</a>
                                    <a class="btn btn-outline-primary" href="{{route('editOffer', $offer)}}">Редагувати оголошення</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <nav class="pagination justify-content-center">
            {!!$offers->links();!!}
        </nav>
    </main>

@stop
