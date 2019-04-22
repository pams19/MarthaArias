<!DOCTYPE html>
<html lang="en">
<head>
    <title>Martha Arias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->

<?php

session_start();
include_once('DBConnection.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
    $query2="SELECT * FROM user, profiles  WHERE user.u_username = '$username' AND user.u_profile = profiles.p_id ";
    $result = mysqli_query($conn, $query2);
    //$row = mysqli_fetch_array($result);
    $x="";

    while($row = mysqli_fetch_array($result)) {
            $profile= $row['p_name'];
            $x .= $profile;
        } echo $x;

    if($x =="Admin")
    {
        require "HeaderAdmin.php";
    } else
        require  "HeaderLoggedin.php";


}

  ?>



<!-- BAckground -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <a href="#" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                <span class="icon-play"></a>
            </a>


        </div>
    </div>
    <!-- END BAckground -->

    <!-- Conctact info and social Media -->
    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>669 127 0663  o 690 5174</h3>
                                <p>Citas y cotizaciones</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>Plan de Ayala 5-A Tierra y Libertad 1. CP 98615 </h3>
                                <p>Zacatecas, México</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Abierto Lunes - Sábado</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social pl-md-5 p-4">
                    <ul class="social-icon">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- END Conctact info and social Media -->

    <!-- Welcome -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Bienvenido a <span>Matha Arias </span>Alto Estilismo Profesional</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 text-center ftco-animate">
                    <p> MARTHA ARIAS “Alto Estilismo Profesional” una sinaloense en Zacatecas, nacida en la hermosa ciudad de Mazatlán, con más de 20 años de experiencia profesional en la industria de la Belleza, con cursos y talleres de los laboratorios y empresas de cosméticas y alto peinado, acreditada en PIVOT POINT en Cosmetología y Estética corporal, colorimetria y alto peinado, además de talleres y diplomados en Tec Italy, NBC, Paul Michel y Prabana.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END Welcome -->

    <!--SERVICES-->
    <section class="ftco-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nuestros Servicios</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-scissor-and-comb"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Peinado &amp; Maquillaje</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-male-head-hair-and-beard"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Manos &amp; Pies</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-heads-hairs-and-scissors"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Tintes</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-young-male-short-irregular-hair-on-head-and-a-small-beard"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Depilaciones </h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--END SERVICES-->

    <!-- rfeqrf-->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">¿Qué hacemos?</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/work-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Hair Style </h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/work-2.jpg);"></a>
                        <div class="text p-4">
                            <h3>Trimming</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(images/work-3.jpg);"></a>
                        <div class="text p-4">
                            <h3>Traditional Haircuts Mens </h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(images/work-4.jpg);"></a>
                        <div class="text p-4">
                            <h3>Hair Style for Womens</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(images/work-5.jpg);"></a>
                        <div class="text p-4">
                            <h3>Trimming </h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(images/work-6.jpg);"></a>
                        <div class="text p-4">
                            <h3>Traditional Haircuts Mens </h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <span><a href="#">Read more</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Plan &amp; Pricing</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Men's Haircut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Children Haircut</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Beard Cut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Men's Haircut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Women's Haircut</span></h3>
                            <span class="price">$49.91</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Men's Haircut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Men's Haircut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="pricing-entry ftco-animate">
                        <div class="d-flex text align-items-center">
                            <h3><span>Men's Haircut</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--END  rfeqrf-->


    <!-- DISCOUNTS -->
    <section class="ftco-section ftco-discount img" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
                    <h3>Save up to 25% Off</h3>
                    <h2 class="mb-4">All Services Discount</h2>
                    <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3">Appointment</a></p>
                </div>
            </div>
        </div>
    </section>
    <!--END  DISCOUNTS -->

    <!--Stylist people -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Hair Stylist</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Martha Arias</a></h3>
                            <span class="position">Hair Specialist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Mark Wilson</a></h3>
                            <span class="position">Beard Specialist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
                            <span class="position">Hair Stylist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
                            <span class="position">Beard Specialist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END Stylist people -->

    <!--SHOP -->
    <section class="ftco-section ftco-bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nuestros Productos</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="product-entry text-center">
                        <a href="#"><img src="images/prod-1.png" class="img-fluid" alt="Colorlib Template"></a>
                        <div class="text">
                            <p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
                            <h3><a href="#">Shaves 01</a></h3>
                            <span class="price mb-4">$150</span>
                            <p><a href="#" class="btn btn-primary">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="product-entry text-center">
                        <a href="#"><img src="images/prod-2.png" class="img-fluid" alt="Colorlib Template"></a>
                        <div class="text">
                            <p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
                            <h3><a href="#">Shaves 01</a></h3>
                            <span class="price mb-4">$150</span>
                            <p><a href="#" class="btn btn-primary">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="product-entry text-center">
                        <a href="#"><img src="images/prod-3.png" class="img-fluid" alt="Colorlib Template"></a>
                        <div class="text">
                            <p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
                            <h3><a href="#">Shaves 01</a></h3>
                            <span class="price mb-4">$150</span>
                            <p><a href="#" class="btn btn-primary">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="product-entry text-center">
                        <a href="#"><img src="images/prod-4.png" class="img-fluid" alt="Colorlib Template"></a>
                        <div class="text">
                            <p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
                            <h3><a href="#">Shaves 01</a></h3>
                            <span class="price mb-4">$150</span>
                            <p><a href="#" class="btn btn-primary">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SHOP -->


    <!--GALLERY -->
    <section class="ftco-gallery">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Gallery</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY -->

    <!-- INteractive -->
    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                                    <strong class="number" data-number="705">0</strong>
                                    <span>Creative Makeup</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Number of Awards</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                                    <strong class="number" data-number="3000">0</strong>
                                    <span>Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
                                    <strong class="number" data-number="900">0</strong>
                                    <span>Piercing Done</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END INteractive -->


    <!-- APPOINTMENTS -->
    <section class="ftco-appointment">
        <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Haz una cita</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" id="appointment_date" class="form-control" placeholder="Fecha">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" id="appointment_time" class="form-control" placeholder="Hora">
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END APPOINTMENTS -->


    <?php


    require "Footer.php";


    ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>
</html>