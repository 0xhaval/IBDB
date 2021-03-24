@extends('backend.layouts.app')
@section('content')
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<section class="row">
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">User</h6>
                                <h6 class="font-extrabold mb-0">{{ $users->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <i class="iconly-boldDocument"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Book</h6>
                                <h6 class="font-extrabold mb-0">{{ $books->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <i class="iconly-boldFolder"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Category</h6>
                                <h6 class="font-extrabold mb-0">{{ $categories->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <i class="iconly-boldChat"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Comment</h6>
                                <h6 class="font-extrabold mb-0">{{ $comments->count() }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold"><a href="{{ route('admin.user.edit', Auth::user()->id) }}">{{ Auth::user()->name }}</a></h5>
                        <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Recent Books</h4>
            </div>
            <div class="card-content pb-4">
                @foreach ($books as $key=>$book)
                    @if ($key < 5)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="{{ $book->image_path }}">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1"><a href="{{ route('admin.book.show', $book->id) }}">{{ $book->title }}</a></h5>
                                <h6 class="text-muted mb-0">@ {{ $book->author }}</h6>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="px-4">
                    <a href="{{ route('admin.book.index') }}"><button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Show More</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
