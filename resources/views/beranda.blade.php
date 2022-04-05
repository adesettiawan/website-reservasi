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


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ url('frontend-assets/images/dijou1.png') }}" alt="Dijou caffe">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang Kami</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#category">Kategori</a></li>
                            <li class="scroll-to-section"><a href="#kontak">Kontak</a></li>
                            <li class="scroll-to-section">
                                <a href="{{ route('reservasi') }}">Buat Reservasi</a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>DijouCoffeebar</h4>
                            <h6>COBA RASA BARU</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{ route('reservasi') }}">Buat Reservasi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ url('frontend-assets/images/slide-01.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ url('frontend-assets/images/slide-02.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="{{ url('frontend-assets/images/slide-03.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>Profil Singkat Dijou CoffeeBar</h2>
                        </div>
                        <p>Lokasi nya di tengah kota Bandar Lampung sehingga ga sulit untuk menemukan cafe ini. Kopi nya
                            super terutama eskopsu dan V60 coffeewine nya. Makanan western di atas rata2 enak. Suasana
                            nya cozy sehingga lupa waktu. Cocok jg buat bawa keluarga. Pokoknya TOP coffeeshop in town.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ url('frontend-assets/images/about-thumb-01.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ url('frontend-assets/images/about-thumb-02.jpg') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{ url('frontend-assets/images/about-thumb-03.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="https://10619-2.s.cdn12.com/rests/original/106_509584540.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Menu Kami</h6>
                        <h2>Menu dengan rasa berkualitas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($dtmenu->take(6) as $menu)
                    <div class="item">
                        <div class='card'>
                            <div class="price">
                                <p>{{ $menu->kategori->nama_kategori }}</p>
                            </div>
                            <img src=" {{ Storage::url($menu->foto) }}" alt="">
                            <div class='info'>
                                <h1 class='title'>{{ $menu->nama_menu }}</h1>
                                <p class='description'>Rp. &nbsp;{{
                                    number_format( $menu->harga, 0, ',','.'); }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    {{-- <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="frontend-assets/images/chefs-01.jpg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Randy Walker</h4>
                            <span>Pastry Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <img src="frontend-assets/images/chefs-02.jpg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>David Martin</h4>
                            <span>Cookie Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                            </ul>
                            <img src="frontend-assets/images/chefs-03.jpg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>Pancake Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="category">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Pilihan Menu</h6>
                        <h2>Banyak Pilihan Kategori Menu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img
                                                        src="{{ url('frontend-assets/images/tab-icon-01.png') }}"
                                                        alt="">Coffee</a></li>
                                            <li><a href='#tabs-2'><img
                                                        src="{{ url('frontend-assets/images/tab-icon-03.png') }}"
                                                        alt="">Makanan</a></a></li>
                                            <li><a href='#tabs-3'><img
                                                        src="{{ url('frontend-assets/images/tab-icon-02.png') }}"
                                                        alt="">Minuman</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            @foreach ($dtmenu->take(6) as $menu)
                                            @if ($menu->kategori_id ==1)
                                            <div class="col-lg-6">
                                                <div class="tab-item">
                                                    <img src="{{ Storage::url($menu->foto) }}" height="100" alt="">
                                                    <h4>{{ $menu->nama_menu }}</h4>
                                                    <p>{{ $menu->kategori->nama_kategori }}</p>
                                                    <div class="price">
                                                        <h6>Rp. &nbsp;{{
                                                            number_format( $menu->harga, 0, ',','.'); }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            @foreach ($dtmenu->take(6) as $menu)
                                            @if ($menu->kategori_id ==2)
                                            <div class="col-lg-6">
                                                <div class="tab-item">
                                                    <img src="{{ Storage::url($menu->foto) }}" height="100" alt="">
                                                    <h4>{{ $menu->nama_menu }}</h4>
                                                    <p>{{ $menu->kategori->nama_kategori }}</p>
                                                    <div class="price">
                                                        <h6>Rp. &nbsp;{{
                                                            number_format( $menu->harga, 0, ',','.'); }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            @foreach ($dtmenu as $menu)
                                            @if ($menu->kategori_id == 3)
                                            <div class="col-lg-6">
                                                <div class="tab-item">
                                                    <img src="{{ Storage::url($menu->foto) }}" height="100" alt="">
                                                    <h4>{{ $menu->nama_menu }}</h4>
                                                    <p>{{ $menu->kategori->nama_kategori }}</p>
                                                    <div class="price">
                                                        <h6>Rp. &nbsp;{{
                                                            number_format( $menu->harga, 0, ',','.'); }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Kontak Kami</h6>
                            <h2></h2>
                        </div>
                        <p>Kontak kami jika ingin melakukan pemesanan atau mengajukan beberapa pertanyaan terkait
                            pelayanan kami. Kami selalu siap 24 jam untuk melayani kebutuhan anda.</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telepon</h4>
                                    <span><a href="tel:080-090-0880">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email</h4>
                                    <span><a href="mailto:dijou@company.com">dijou@company.com</a></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="message">
                                    <i class="fa fa-instagram"></i>
                                    <h4>Instagram</h4>
                                    <span><a href="https://www.instagram.com/dijou.coffee/">Dijou
                                            Coffeebar</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="number-guests" name="number-guests" id="number-guests">
                                            <option value="number-guests">Number Of Guests</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option name="7" id="7">7</option>
                                            <option name="8" id="8">8</option>
                                            <option name="9" id="9">9</option>
                                            <option name="10" id="10">10</option>
                                            <option name="11" id="11">11</option>
                                            <option name="12" id="12">12</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control"
                                                placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="time" name="time" id="time">
                                            <option value="time">Time</option>
                                            <option name="Breakfast" id="Breakfast">Breakfast</option>
                                            <option name="Lunch" id="Lunch">Lunch</option>
                                            <option name="Dinner" id="Dinner">Dinner</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A
                                            Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{ url('frontend-assets/images/dijou1.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Dijou Coffeebar.
                            <br>2022.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
</body>

</html>