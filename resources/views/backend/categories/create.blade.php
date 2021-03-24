@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Add a New Category by | {{ Auth::user()->name }} |</h3>
</div>
<section id="basic-vertical-layouts">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Create Category</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
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
                                    <label for="first-name-icon">Name</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="C++" id="first-name-icon">
                                        <div class="form-control-icon">
                                            <i class="bi bi-chat-left-dots"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
