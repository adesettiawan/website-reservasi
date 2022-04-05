{{--
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  @yield('style')

  <title>Pelanggan - Caffe</title>
</head>

<body>
  @yield('content')
  <!-- Optional JavaScript; choose one of the two! -->
  @yield('script')

  @include('sweetalert::alert')
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  @yield('style')

  <title>DIJOU COFFEEBAR</title>
  <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ url('frontend-assets/css/bootstrap.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ url('frontend-assets/css/font-awesome.css') }}">

  <link rel="stylesheet" href="{{ url('frontend-assets/css/templatemo-klassy-cafe.css') }}">

  <link rel="stylesheet" href="{{ url('frontend-assets/css/owl-carousel.css') }}">

  <link rel="stylesheet" href="{{ url('frontend-assets/css/lightbox.css') }}">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  @yield('content')



  <!-- jQuery -->
  <script src="{{ url('frontend-assets/js/jquery-2.1.0.min.js') }}"></script>

  <!-- Bootstrap -->
  <script src="{{ url('frontend-assets/js/popper.js') }}"></script>
  <script src="{{ url('frontend-assets/js/bootstrap.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ url('frontend-assets/js/owl-carousel.js') }}"></script>
  <script src="{{ url('frontend-assets/js/accordions.js') }}"></script>
  <script src="{{ url('frontend-assets/js/datepicker.js') }}"></script>
  <script src="{{ url('frontend-assets/js/scrollreveal.min.js') }}"></script>
  <script src="{{ url('frontend-assets/js/waypoints.min.js') }}"></script>
  <script src="{{ url('frontend-assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ url('frontend-assets/js/imgfix.min.js') }}"></script>
  <script src="{{ url('frontend-assets/js/slick.js') }}"></script>
  <script src="{{ url('frontend-assets/js/lightbox.js') }}"></script>
  <script src="{{ url('frontend-assets/js/isotope.js') }}"></script>

  <!-- Global Init -->
  <script src="{{ url('frontend-assets/js/custom.js') }}"></script>
  <script>
    $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

  </script>

  @yield('script')

  @include('sweetalert::alert')
</body>

</html>