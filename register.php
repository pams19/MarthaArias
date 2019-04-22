<?php
session_start();
$username=" ";

$errors = array();

include_once('DBConnection.php');

//When user click the register button
if (isset($_POST['registerButton'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $password2) {
        array_push($errors, "The two passwords do not match");
    }


// if there are no errors, save user
    if (count($errors) == 0) {
        //hash password before storing
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);

        $query = "INSERT INTO user(u_mail, u_username, u_pass, u_profile) 
          VALUES('$email', '$username', '$hashed_password', 2)";

        $query2 .= "INSERT INTO cotizar(c_username) 
          VALUES ('$username')";
        mysqli_query($conn, $query);
        mysqli_query($conn, $query2);
        $_SESSION['username'] = $username;
        //$_SESSION['success'] = "You are now logged in";
        header('location:index.php'); // redirect to index


    }
}
?>
/*$username = strip_tags($_POST['username']);

    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);

        if ($result) {

            $_SESSION['username'] = $username;
           header('Location: index.php');
        } else {

            echo "Failed to register";

        }
*/


