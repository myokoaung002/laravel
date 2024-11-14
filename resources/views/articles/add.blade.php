@extends("layouts.app")

@section("content")
    <div class="container">
        @if($errors->any())
        <div class="alert alert-warning">
            <ol>
                @foreach($errors->all() as $error)
                <li class="">
                    {{ $error }}
                </li>
                @endforeach
            </ol>
        </div>
        @endif
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control mt-1">
            </div>
            <div class="mb-3">
                <label for="">Body</label>
                <textarea type="text" name="body" class="form-control mt-1"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Category</label>
                <select class="form-select mt-1" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['name'] }}
                    </option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Add Article" class="btn btn-primary">
        </form>
    </div>
@endsection