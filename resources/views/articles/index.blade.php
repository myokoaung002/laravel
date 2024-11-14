@extends("layouts.app")

@section("content")
    <div class="container">
        @if(session('info'))
            <div class="alert alert-warning">
                {{ session('info') }}
            </div>
        @endif
        {{ $articles->links() }}
        @foreach($articles as $article)
        <div class="card m-1">
            <div class="card-body">
                <h3 class="card-title">
                    {{ $article->title }}
                </h3>
                <div class="text-muted small mt-2">
                    {{ $article->created_at->diffForHumans() }},
                    Category : <b>{{ $article->category->name }}</b>
                </div>
                <p class="card-text mt-2">
                    {{ $article->body }}
                </p>
                <a href="{{ url("/articles/detail/$article->id")}}" class="card-link">
                    Detail More &raquo;
                </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection