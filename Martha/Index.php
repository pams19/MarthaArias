<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MA</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <style>
        body{
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("images/sports.jpg");
            background-color: black;
            background-attachment: scroll;
        }
        header{
            background: #000;
            height: 100px;
        }
        .userRegister h2{
            color: white;
        }

        p{
            width: 450px;
            color: white;
        }

        .form{
            float: left;
            position: relative;
            right: 1000px;
            top: -100px;
            background-color: turquoise;
        }


    </style>
</head>

<?php
require "Header.php";
?>


<!-- Main Starts -->

<main class="content-control">
    <!--<img id="Sportbanner" src="images/sports.jpg" alt="Sports Home">-->

    <!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
        <h2> Martha Arias Estilismo profesional </h2>
        <p> QUICK PLAYs            </p>
    </section><br><br>

    <form id="register" method="post" action="register.php" >

        <section  class="grid-60">
            <div class="form">
                <div class="userRegister">
                    <h2>Sign Up</h2>
                    <h2>Cost-Free! Anyone can join</h2><br><br>
                    <label for="username">User Name:</label>
                    <Input type="text" placeholder="Enter username" name="username" class="inputbox" required><br>
                    <label for="email">Email:</label>
                    <Input type="email" placeholder="Enter email" name="email" class="inputbox" required><br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" class="inputbox" required><br>

                    <div id="submit">
                        <button type="submit" value="Register" name="registerButton" class="btn">Register</button>
                    </div>
                    <h3>Health Is Wealth!</h3>
                </div>
    </form>

    </section>


</main>
<!-- Main Ends -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MA</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <style>
        body{
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("images/sports.jpg");
            background-color: black;
            background-attachment: scroll;
        }
        header{
            background: #000;
            height: 100px;
        }
        .userRegister h2{
            color: white;
        }

        p{
            width: 450px;
            color: white;
        }

        .form{
            float: left;
            position: relative;
            right: 1000px;
            top: -100px;
            background-color: turquoise;
        }


    </style>
</head>

<?php
require "Header.php";
?>


<!-- Main Starts -->

<main class="content-control">
    <!--<img id="Sportbanner" src="images/sports.jpg" alt="Sports Home">-->

    <!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
        <h2> Martha Arias Estilismo profesional </h2>
        <p> QUICK PLAYs            </p>
    </section><br><br>

    <form id="register" method="post" action="register.php" >

        <section  class="grid-60">
            <div class="form">
                <div class="userRegister">
                    <h2>Sign Up</h2>
                    <h2>Cost-Free! Anyone can join</h2><br><br>
                    <label for="username">User Name:</label>
                    <Input type="text" placeholder="Enter username" name="username" class="inputbox" required><br>
                    <label for="email">Email:</label>
                    <Input type="email" placeholder="Enter email" name="email" class="inputbox" required><br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" class="inputbox" required><br>

                    <div id="submit">
                        <button type="submit" value="Register" name="registerButton" class="btn">Register</button>
                    </div>
                    <h3>Health Is Wealth!</h3>
                </div>
    </form>

    </section>


</main>
<!-- Main Ends -->

</body>
</html>
