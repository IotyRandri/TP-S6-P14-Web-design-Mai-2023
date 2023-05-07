<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Domaines Applications</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('BackOffice/include/js_css')
</head>

<body>

  @include('BackOffice/include/header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/home">Home</a></li>
          <li>Domaines Application</li>
        </ol>
        <h2>Domaines Application</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

      <div class="row">
        <table class="table table-hover">
          <th>Titre</th>
          <th><th>
          <th></th>
  
          @foreach ($domainesapplication as $domaine)
          <form>
            <tr>
              <td>{{$domaine->titre}}</td>
              <td><a class="link" href="/domaineapplication/{{$domaine->id}}">Modifier</a></td>
              <td><a class="btn btn-danger" href="/supprimerdomaineapplication/{{$domaine->id}}">Supprimer</a></td>
            </tr>    
          </form>
          @endforeach
  
        </table>
      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- Footer -->
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