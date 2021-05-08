@extends('layouts.app')
@section('content')
<section class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-content">
            <div class="card-body">
                <h4 class="card-title">{{ $book->title }}</h4>
                <small class="text-muted">Author: {{ $book->author }}</small>
                <p class="card-text">
                    {{ $book->description}}
                </p>
                <small class="text-muted">Publish at {{ $book->created_at }} | </small>
                <small class="text-muted">ISBN : {{ $book->isbn }} | </small>
                <small class="text-muted">{{ $book->pages }} Pages </small>
            </div>
            <img class="card-img-bottom img-fluid" src="{{ $book->image_path }}"
                alt="Card image cap" style="height: 20rem; object-fit: cover;">
        </div>
    </div>


    @auth
    <div class="card shadow-sm mb-4 bg-white rounded mt-5">
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
    @endauth
    @forelse ($book->comments as $comment)
        <div class="card shadow-sm mb-4 bg-white rounded mt-4">
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
                @auth
                    @if (Auth::user()->id == $comment->user->id)
                        <a href="#" class="btn btn-danger float-right"
                            onclick="document.getElementById('delete-{{ $comment->id }}').submit();"
                        >Delete</a>
                    @endif
                @endauth
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

</div>
@endsection
