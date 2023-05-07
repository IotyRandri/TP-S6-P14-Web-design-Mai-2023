<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modification Domaine Application</title>
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
          <li>Modification Domaine Application</li>
        </ol>
        <h2>Modification Domaine Application</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">


        <form action="/modifierdomaineapplication" method="POST" class="form-group" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="id" value="{{$id}}"/>

          <label for="titreresume"> Titre Resume</label>
            <input class="form-control" type="text" name="titreresume" id="titreresume" value="{{$resume->titre}}"/>
            <br>
          <label for="descriptionresume"> Description du Resume </label>
            <textarea class="form-control" id="descriptionresume" name="descriptionresume">
              {{$resume->description}}
              </textarea> 
          <br>

          <label for="titre"> Titre </label>
            <input class="form-control" type="text" id="titre" name="titre" value="{{$titre}}"/>
          <br>
          <label for="description"> Description</label>
            <textarea class="form-control" id="description" name="description">{{$description}}</textarea>
          <br>

          <label>Image</label>
            <div class="row text-center">
              <img src="{{asset('images_IA/'.$image)}}" alt="{{$titre}}"/>
            </div>
          <br>

          <input class="form-control" type="file" name="image" id="image" value="{{$image}}"/>

          <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
      </div>
    </section>

    <script>

      
      ClassicEditor
      .create(document.querySelector('#descriptionresume'))
      .catch( error => {
        console.log(error);
      });

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