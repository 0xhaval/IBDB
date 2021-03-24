@extends('layouts.app')
@section('content')

      <!-- ======= Hero Section ======= -->
      <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Social Cataloging website </h1>
            <h2 data-aos="fade-up" data-aos-delay="400">that allows individuals to search its database of books, annotations, quotes, and reviews. Users can sign up and register books to generate library catalogs and reading lists</h2>
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                <a href="{{ route('book.index') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Get Started</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
                </div>
            </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/frontend/img/hero-img.png') }}" class="img-fluid" alt="">
            </div>
        </div>
        </div>

    </section><!-- End Hero -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <div>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $users->count() }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Readers</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                    <span data-purecounter-start="0" data-purecounter-end="{{ $books->count() }}" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Books</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-headset" style="color: #15be56;"></i>
                    <div>
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                    </div>
                </div>
                </div>

            </div>

            </div>
        </section><!-- End Counts Section -->

        <div class="container">
            <section id="book">
                <header class="section-header">
                    <p>Best Books</p>
                </header>
                <div class="row">
                    @foreach ($books as $key=>$book)
                        @if ($key < 8)
                        <div class="col-md-3">
                            <div class="profile-card-2"><a href="{{ route('book.show', $book->id) }}"><img src="{{ $book->image_path }}" class="img img-responsive"></a>
                                <div class="profile-name"><a href="{{ route('book.show', $book->id) }}" class=" text-light">{{ $book->title }}</a></div>
                                <div class="profile-username">@ {{ $book->author }}</div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>

        </div>

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">

            <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                        Non consectetur a erat nam at lectus urna duis?
                        </button>
                    </h2>
                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </div>
                    </div>
                    </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                        </button>
                    </h2>
                    <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </div>
                    </div>
                    </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                        </button>
                    </h2>
                    <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </div>
                    </div>
                    </div>

                </div>
                </div>

                <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                        </button>
                    </h2>
                    <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        <div class="accordion-body">
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </div>
                    </div>
                    </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                        </button>
                    </h2>
                    <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        <div class="accordion-body">
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                        </div>
                    </div>
                    </div>

                    <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                        Varius vel pharetra vel turpis nunc eget lorem dolor?
                        </button>
                    </h2>
                    <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                        <div class="accordion-body">
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                        </div>
                    </div>
                    </div>

                </div>
                </div>

            </div>

            </div>

        </section>
        <!-- End F.A.Q Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Testimonials</h2>
                <p>What they are saying about us</p>
            </header>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <div class="profile mt-auto">
                        <img src="{{ asset('assets/images/faces/2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <div class="profile mt-auto">
                        <img src="{{ asset('assets/images/faces/2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <div class="profile mt-auto">
                        <img src="{{ asset('assets/images/faces/2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                    </div>
                </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

            </div>

        </section>
        <!-- End Testimonials Section -->

@endsection
