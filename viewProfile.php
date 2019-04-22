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

<?php
session_start();
require "HeaderAdmin.php";

?>
<body>
<main>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_4f.jpg');" data-stellar-background-ratio="0.6">
        <div class="overlay"></div>
        <div class="container">

            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <a href="#" class="d-flex justify-content-center align-items-center">
                    <div   id="ftco-nav" >
                        <?php
                        $user = $_GET["user"];

                        $query2 = "SELECT * FROM user WHERE u_username='$user'";


                        $result=mysqli_query($conn, $query2);
                        if(mysqli_num_rows($result)==1){
                            while ($row= mysqli_fetch_assoc($result)){

                                $username=$row['u_username'];
                                $firstname=$row['u_name'];
                                $lastname=$row['u_lastname'];
                                $email=$row['u_mail'];
                                $address=$row['u_address'];
                                $city=$row['u_city'];
                                $birth=$row['u_birth'];
                                $mobile=$row['u_phone'];

                                //$upload = "UploadImg/".$image;
                            }
                        }
                        ?>
                        <div class="viewProfileTable">
                            <!-- <img src=" <?php echo $upload; ?>" height="100px" width="100 px"> -->
                            <table>
                                <tr><td >Username:</td><td class="label"><?php echo $username; ?></td></tr>
                                <tr><td>Firstname:</td><td  class="label"><?php echo $firstname; ?></td></tr>
                                <tr><td >Lastname:</td><td class="label"><?php echo $lastname; ?></td></tr>
                                <tr><td>Email:</td><td class="label"><?php echo $email; ?></td></tr>
                                <tr><td>Address:</td><td class="label"><?php echo $address; ?></td></tr>
                                <tr><td>City:</td><td class="label"><?php echo $city; ?></td></tr>
                                <tr><td>Birth:</td><td class="label"><?php echo $birth; ?></td></tr>
                                <tr><td>Mobile:</td><td class="label"><?php echo $mobile; ?></td></tr>
                            </table>
                        </div>
                        <a href="profile.php">Editar Usuario </a>


                    </div>
            </div>
        </div>
    </div>



</main>
<!--Main Ends -->
<!-- Footer -->
<footer>
    <?php
    require ("Footer.php")
    ?>
</footer>
</body>
</html>



