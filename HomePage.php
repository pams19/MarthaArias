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

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Martha Arias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div  class="right" id="ftco-nav" > <!-- <  class="collapse navbar-collapse"  section class="right" aligns setion content to the right side of the header -->
            <!--<form id = "login"  method="post" action="login.php"> -->

                <form class="login" method="post" action="login.php" >
                    <input type="text" placeholder="usuario" name="username" class="inputtxt">
                    <input type="password" placeholder="contraseña" name ="password" class="inputtxt">
                    <button type="submit" value="login" name="login" class="btn">Login</button><br>
                    <input type="checkbox">Seguir conectado
                    <a href="#">Olvido de contraseña</a>
                </form>
        </div>

    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">

        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <a href="index.php" class="icon d-flex justify-content-center align-items-center">  Usuario Invitado
               </a>
            </a>


            <div class="col-md-6 ftco-animate"  data-scrollax=" properties: { translateY: '70%' }">
                <p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> ¿Quieres registrarte con nosotros? </p>
                <h2> Sé parte de la experiencia</h2><br><br>
                <form id="register" method="post" action="register.php" >
                    <label for="username">Nombre de usuario:</label>
                    <Input type="text" placeholder="Enter username" name="username" class="inputbox" required><br>
                    <label for="email">Email:</label>
                    <Input type="email" placeholder="Enter email" name="email" class="inputbox" required><br>
                    <label for="password">Password:</label>

                    <input type="password" placeholder="Enter Password" name="password" class="inputbox" required><br>
                    <label for="password">Confirm Password:</label>

                    <input type="password" placeholder="Confirm Password" name="password2" class="inputbox" required><br>
                    <div id="submit">
                        <button type="submit" value="Register" name="registerButton"  class="btn">Register</button> <br><br>

                        <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">¡Déjate consentir!</h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-primary px-4 py-3">¡Haz una cita ya!</a></p>
                        <span class="empty" style="display: none;">Field must not be empty !</span>
                        <span class="error" style="display: none;">Email or Password not matched !</span>
                        <span class="disable" style="display: none;">User Id disabled !</span>
                    </div>
                </form>

            </div>

        </div>
    </div>


    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
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

    <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">¿Tienes alguna pregunta?</h2>
            <div class="block-23 mb-3">
                <ul>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">marthaarias@gmail.com</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">

        <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
            </p>
    </div>
</div>
</div>
</footer>



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