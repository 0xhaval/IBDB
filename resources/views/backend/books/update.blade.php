@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Update Book {{ $book->title }} by | {{ Auth::user()->name }} |</h3>
</div>
<section id="basic-vertical-layouts">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update book information</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('admin.book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Error!</strong> <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Title</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="title" value="{{ $book->title }}"
                                            placeholder="C++ Book" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-chat-left-dots"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email-id-icon">Description</label>
                                    <div class="position-relative">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">
                                            {{ $book->description }}
                                        </textarea>
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-text"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Author Name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="author" value="{{ $book->author }}"
                                            placeholder="Ali" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Pages Number</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control" name="pages" value="{{ $book->pages }}"
                                            placeholder="458" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-list-ol"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">ISBN Number</label>
                                    <div class="position-relative">
                                        <input type="number" class="form-control" name="isbn" value="{{ $book->isbn }}"
                                            placeholder="2346955543" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-three-dots"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="role-id-icon">Category</label>
                                    <div class="position-relative">
                                        <select class="form-control" id="role" name="category_id">
                                            <option value="" disabled selected>Choose One..</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="form-control-icon">
                                            <i class="bi bi-folder"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <img src="{{ $book->image_path }}" alt="" width="50%">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label class="form-label" for="customFile">Upload Image</label>
                                    <div class="position-relative">
                                        <input type="file" class="form-control" id="customFile" name="image">
                                        <div class="form-control-icon">
                                            <i class="bi bi-image"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
