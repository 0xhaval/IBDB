@extends('layouts.app')
@section('content')

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing mt-5">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p>All Book</p>
            <form action="{{ route('book.index') }}" method="GET">
              <div class="input-group">
                  <input type="search" name="search" class="form-control form-control-lg " placeholder="Search by Title, Author, ISBN"
                      aria-label="Search" aria-describedby="basic-addon2" value="{{ request('search') }}">
              </div>
            </form>
          </header>

          <div class="row gy-4" data-aos="fade-left">

            @forelse($books as $book)
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <h3 style="color: #ff0071;"><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></h3>
                    <a href="{{ route('book.show', $book->id) }}"><img src="{{ $book->image_path }}" class="img-fluid" alt=""></a>
                    <small class="text-muted">{{ $book->comments->count() }} Comments</small><br>
                    <small class="text-muted">Short Description</small>
                    <p>{{ Str::limit($book->description, 40, '...') }}</p>
                    <a href="#" class="btn-buy">Author / {{ $book->author }}</a>
                </div>
            </div>
            @empty
            <h5>No Result</h5>
            @endforelse


          </div>
        <div class="mt-5">
            {{ $books->links('pagination::bootstrap-4') }}
        </div>

        </div>

    </section><!-- End Pricing Section -->

@endsection
