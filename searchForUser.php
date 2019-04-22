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

                        <form class="createUser" method="post" action="profile.php" >
                            <div>
                                <button type="submit" value="createUser" name="createUser" class="btn">Crear usuario</button><br>
                                <button type="submit" value="cancelImg" name="cancelButton" class="btn">Cancelar</button>
                            </div>
                        </form>
                        <?php

                $result = "";
                $userList= " ";
                $query1 = "SELECT u_username FROM user";
                $result = mysqli_query($conn, $query1);
                $result2 = mysqli_query($conn, $query1);


                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){

                        $user=$row['u_username'];
                        $userList .="<a href='viewProfile.php?user=".$user."' class = 'cat_links'>".$user." <br> <font size=''-3',color='#000000'>"." </a>";


                    }
                    echo $userList;
                } else{
                    echo "<p style='color: #f9f9f9' class='searchresult'>There are no users </p>";
                }


                ?>
                    </div>
            </div>
        </div>
    </div>


</main>
<!--Main Ends -->

<!-- Footer -->
    <?php
    require ("Footer.php")
    ?>

</body>
</html>
