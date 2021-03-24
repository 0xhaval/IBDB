@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Book Statistics</h3>
</div>
<form action="{{ route('admin.book.index') }}" method="GET"
class="d-none d-sm-inline-block form-inline  navbar-search ">
    <div class="input-group">
        <input type="search" name="search" class="form-control bg-black border-0 small" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>
</form>
<div  class="mt-3">
    <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Add a Book</a>
</div>
@if ($message = Session::get('message'))
<div class="alert alert-success mt-3">
    <p>{{ $message }}</p>
</div>
@endif
<section class="section mt-3">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Short Description</th>
                        <th>Category</th>
                        <th>Commetns</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                    <tr>
                        <td>
                            <a href="{{ route('admin.book.show', $book->id) }}">{{ $book->title }}</a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ Str::limit($book->description, 30) }}</td>
                        <td>
                            <span class="badge bg-success">{{ $book->category->name }}</span>
                        </td>
                        <td>
                            <span class="badge bg-secondary">{{ $book->comments->count() }}</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.book.edit', $book->id) }}" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm" onclick="document.getElementById('delete-user-{{ $book->id }}').submit();">Delete</a>
                            <form action="{{ route('admin.book.destroy', $book->id) }}" method="POST" id="delete-user-{{ $book->id }}">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @empty
                    <h6>There is not result</h6>
                    @endforelse

                </tbody>
            </table>
            <div>
                {{ $books->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

</section>
@endsection
