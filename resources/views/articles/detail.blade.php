@extends("layouts.app")

@section("content")
    <div class="container">
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
                <a href="{{ url("/articles/delete/$article->id")}}" class="btn btn-warning mt-3">Delete</a>
            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item active mb-2">
                <b>Comments ({{ count($article->comments) }})</b>
            </li>
            @foreach($article->comments as $comment)
            <li class="list-group-item m-1">
            <a href="{{ url("/comments/delete/$comment->id") }}" class="btn btn-close float-end mt-2"></a>
                {{ $comment->content }}
                <div class="">
                    By <b>{{ $comment->user->name }}</b>,
                    {{ $comment->created_at->diffForHumans() }}
                </div>
            </li>     
            @endforeach
        </ul>
        @auth
        <form action="/comments/add" method="post" class="mt-2">
            @csrf
            <input type="hidden" name="article_id" value="{{ $article->id}}" class="form-control mb-3">
            <textarea type="text" name="content" class="form-control mb-3" placeholder="New Comment"></textarea>
            <input type="submit" value="Add Comment" class="btn btn-secondary ">
        </form>
        @endauth
    </div>
@endsection