<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{$homepage->description}}">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>{{$homepage->titre}}</title>

    @include('FrontOffice/include/js_css')
    
    
</head>
<body>

    <!-- Nav Bar -->
    @include('FrontOffice/include/navbar')
    

      
    <!-- Header -->
    <header id="header" class="header">
        <img class="decoration-star" src="FrontOffice/images/decoration-star.svg" alt="alternative">
        <img class="decoration-star-2" src="FrontOffice/images/decoration-star.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">{{$homepage->titre}}</h1>
                        <div class="p-large">{!!$homepage->description!!}</div>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('images_IA/'.$homepage->image)}}" style="width: 700px; height: 500px">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Projects -->
    <div id="domaineapplications" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Les domaines d'applications de l'IA</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    @foreach ($resumes as $resume)
                        <!-- Card -->
                        <div class="card">
                            <img class="img-fluid" src="{{asset('images_IA/'.$resume->domaineapplication->image)}}" width="350" height="233" alt="{{$resume->titre}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$resume->titre}}</h5>
                                <p class="card-text">{!!$resume->description!!} <a class="blue no-line" href="/front/domaineapplication/{!! strip_tags($resume->description).'-'.$resume->iddomaineapplication!!}">Voir en detail</a></p>
                            </div>
                        </div>
                        <!-- end of card -->    
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of projects -->



    <!-- Footer -->
    @include('FrontOffice/include/footer')
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="FrontOffice/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="FrontOffice/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="FrontOffice/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="FrontOffice/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="FrontOffice/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>