<?php
session_start();
//Connect with Database

include_once ("DBConnection.php");



if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE u_username = '$username'";

    $result = mysqli_query($conn, $sql);

    $resultq = mysqli_num_rows($result);

    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$pass= md5($password);
    $pass1 = "";

    if ($resultq>0)
    {
       while($row = mysqli_fetch_assoc($result)) {
           $pass1=$row['u_pass'];
        }
        $mo1= $_SESSION['pass'];
        //echo "Error, no user";
       // $mo= password_verify($password,$mo1);

        if( $pass=$pass1)
        {
            $_SESSION["username"] = $username;
            header("location:index.php");
            exit();
        } else
        {
            echo "Error, Login failed";
        }
    }

}


/*
//Code to verufy is username and password input from user math with stored in DB (no hashing for security)
if ($_POST['login']) {
    include_once('DBConnection.php');
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $sql = "SELECT *  FROM user where u_username = '$username' AND u_pass ='$password' LIMIT 1 ";
    $query = mysqli_query($conn, $sql);


    if(mysqli_num_rows($query)==1){
        session_start();
        $_SESSION['username'] = $username;

        header('Location: index.php');
    } else {
        echo "Incorrect credentials";
    }
}
?>


/*

if (mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
if( password_verify( $hashed_password, $row['u_pass']))
{
$_SESSION["username"] = $username;
header("location:index.php");
} else
{
echo "Error, Login failed";
}
} echo "Error, no user";
}

}

/*




*/

