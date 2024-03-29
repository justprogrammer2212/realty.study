<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                Останні новини
            </h3>
            @foreach($articles as $art)
            <div class="blog-post">
                <h2 class="blog-post-title">{{$art->title}}</h2>
                <p class="blog-post-meta">{{$art->created_at}} <a href="#">{{$art->user()->name}}</a></p>
                <p>{{$art->description}}</p>
                <p>
                    <a class="btn btn-outline-warning" href="{{route('editArticle', $art)}}">Редагувати статтю</a>
                </p>
                <p>
                    <a class="btn btn-outline-danger" href="{{route('deleteArticle', $art)}}">Видалити статтю</a>
                </p>
            </div><!-- /.blog-post -->
            @endforeach
        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Про нас</h4>
                <p class="mb-0">Ми команда професіоналів яка старається знаходити для вас найцікавіші оголошення з цілої України</p>
            </div>
            <div class="p-4">
                <h4 class="font-italic">Шукайте нас</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->
    <nav class="pagination">
        {!!$articles->links();!!}
    </nav>
</main><!-- /.container -->
