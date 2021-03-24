@extends('layouts.app')
@section('content')
<section class="container mt-5">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-2">
            <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                  <p>{{ $category->name }}</p>
                  <footer class="blockquote-footer">
                    <small class="text-light">
                     <cite title="Source Title">has {{ $category->books->count() }} Book</cite>
                    </small>
                  </footer>
                </blockquote>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
