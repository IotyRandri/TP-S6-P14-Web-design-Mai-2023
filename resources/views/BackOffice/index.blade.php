<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Info IA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('BackOffice/include/js_css')
</head>

<body>

  @include('BackOffice/include/header')

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Actions</h2>
        </div>

        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="/formdomaineapplication"> Ajouter Domaine Application</a></h4>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="/listedomaineapplication">Voir les Domaines Application</a></h4>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-folder"></i></div>
              <h4><a href="/formhomepage">Modifier Accueuil</a></h4>
            </div>
          </div>

        </div>


        <!-- ======= Domaines Existant Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container text-center">
          
          <div class="row" data-aos="zoom-in">
            <div class="section-title">
              <h4>Domaines Existants</h4>
            </div>
            @foreach($domainesapplication as $domaineapp)  
              <div class="col-lg-4 col-md-6 col-6 d-flex align-items-center justify-content-center">
                <img src="data:image/{{$domaineapp->extension}};base64,{{$domaineapp->image}}" class="img-fluid" alt="{{$domaineapp->nomimage}}">
              </div>
            @endforeach
          </div>

        </div>
      </section><!-- End Domaines Existant Section -->

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('BackOffice/include/footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>