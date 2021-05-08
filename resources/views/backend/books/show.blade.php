@extends('backend.layouts.app')
@section('content')
<section id="content-types">
    <h6>By ~ {{ $book->user->name }} ~ at {{ $book->created_at }}</h6>
    <div class="card">
        <div class="card-content">
            <img class="card-img-top img-fluid" src="{{ $book->image_path }}" alt="Card image cap"
                style="height: 20rem" />
            <div class="card-body">
                <h4 class="card-title">{{ $book->title }}</h4>
                <p><small>Author : {{ $book->author }}</small></p>
                <p class="card-text">
                    {{ $book->description }}
                </p>
                <button class="btn btn-primary block">ISBN : {{ $book->isbn }}</button>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mb-4 bg-white rounded">
        <div class="card-header bg-dark text-light mb-3">
            Write a comment...
        </div>
        <div class="card-body">
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <input type="text" hidden name="user_id" value="{{ Auth::user()->id }}">
                <input type="text" hidden name="book_id" value="{{ $book->id }}">
                <textarea name="content" id="" cols="30" rows="5" class="form-control"></textarea>
                <br>
                <input type="submit" value="Send" class="btn btn-primary float-right">
            </form>
        </div>
    </div>
    @forelse ($book->comments as $comment)
        <div class="card shadow-sm mb-4 bg-white rounded">
            <div class="card-header">
                <a href="#">
                    {{ $comment->user->name }}
                </a>
                <div class="float-right">
                    {{ $comment->created_at->format('Y-m-d H:i') }}
                </div>
            </div>
            <div class="card-body">
                <p>{{ $comment->content }}</p>
                <a href="#" class="btn btn-danger float-right"
                    onclick="document.getElementById('delete-{{ $comment->id }}').submit();"
                >Delete</a>
            </div>
        </div>

        <form action="{{ route('comment.destroy', $comment->id) }}" method="POST" id="delete-{{ $comment->id }}">
            @csrf
            @method('delete')
        </form>
    @empty
        <h6>There is no Comment</h6>
    @endforelse
</section>
@endsection
