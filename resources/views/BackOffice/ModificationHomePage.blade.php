<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$titre}}</title>
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
          <li>Modification Acceuil</li>
        </ol>
        <h2>Modification Acceuil</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">


        <form action="/modifierhomepage" method="POST" class="form-group" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="id" value="{{$homepage->id}}"/>

          <label for="titre"> Titre</label>
            <input class="form-control" type="text" name="titre" id="titre" value="{{$homepage->titre}}"/>
          <br>

          <label for="description"> Description </label>
            <textarea class="form-control" id="description" name="description">{{$homepage->description}}
              </textarea> 
          <br>

          <div class="text-center">
            <img width="800" height="800" src="{{asset('images_IA/'.$homepage->image.'')}}"/>
            <br>
          </div>


          <label for="image">Image</label>
          <input class="form-control" type="file" name="image" id="image" value="{{$homepage->image}}"/>
          <br>

          <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
      </div>
    </section>

    <script>

      ClassicEditor
        .create(document.querySelector('#description'))
        .catch( error => {
          console.log(error);
      });

    </script>

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