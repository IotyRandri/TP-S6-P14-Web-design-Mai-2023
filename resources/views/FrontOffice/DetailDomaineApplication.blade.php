<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{$domaineapplication->description}}">
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
    <title>Domaine d'application de l'Intelligence Artificielle : {{$domaineapplication->titre}}</title>
    
    @include('FrontOffice/include/js_css')

</head>
<body>
    
    <!-- Nav Bar -->
    @include('FrontOffice/include/navbar')


    <!-- Header -->
    <header class="ex-header bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Domaine d'application de l'Intelligence Artificielle : {{$domaineapplication->titre}}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <img class="img-fluid mt-5 mb-3" src="data:image/{{$domaineapplication->extension}};base64,{{$domaineapplication->image}}" alt="{{$domaineapplication->nomimage}}">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="text-box mb-5">
                        <h3>{{$domaineapplication->titre}}</h3>
                        {!!$domaineapplication->description!!}
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


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