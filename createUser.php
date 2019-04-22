<?php
session_start();

include_once('DBConnection.php');
if ($_POST['profileButton']) {


  $username=$_SESSION['username'];
  $uname = strip_tags($_POST['name']);
  $ulastname = strip_tags($_POST['lastname']);
  $address = strip_tags($_POST['address']);
  $mail = strip_tags($_POST['mail']);
  $phone = strip_tags($_POST['phone']);
  $city = strip_tags($_POST['city']);
  $birth = strip_tags($_POST['birth']);
  $pass = strip_tags($_POST['pass']);



   $query = "INSERT INTO user(u_name, u_lastname, u_username, u_address, u_mail, u_phone, u_city, u_birth, u_pass, u_profile)
     VALUES ('$uname','$ulastname','$address','$mail','$phone','$city', '$birth', '$pass', 1)";



    mysqli_query($conn, $query);

    header('Location: searchForUser.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE

     if (mysqli_query($conn, $query)) {

         $query2 .= "INSERT INTO cotizar(c_username) 
          VALUES ('$username')";
        $result2 = mysqli_query($conn,$query2);


      } else {

          echo "Failed to update";
       }
}


?>
