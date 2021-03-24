  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Send a new Book</p>
          </div>
          <div class="col-lg-6">
            <form action="">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>IBDB</span>
            </a>
            <p>social cataloging website that allows individuals to search its database of books, annotations, quotes, and reviews. Users can sign up and register books to generate library catalogs and reading lists</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> Publish Book</li>
              <li><i class="bi bi-chevron-right"></i> Publish Book</li>
              <li><i class="bi bi-chevron-right"></i> Publish Book</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Baghdad Road Street <br>
              Kirkuk, KI 36001<br>
              IRAQ <br><br>
              <strong>Phone:</strong> +964 770 3456 987<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>IBDB</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Aziz &amp; Mustafa</a>
      </div>
    </div>
  </footer><!-- End Footer -->
