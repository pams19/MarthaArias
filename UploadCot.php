<?php
session_start();
$username=$_SESSION['username'];
include_once('DBConnection.php');
if ($_POST['CotButton']) {


    //$uname = strip_tags($_POST['c_name']);
    $description = strip_tags($_POST['c_description']);
    //$servicio = strip_tags($_POST['c_servicio']);
    $mail = strip_tags($_POST['c_mail']);

    //$mobilenumber = strip_tags($_POST['mobilenumber']);


    //Image querys
    $statusMsg = '';

    // File   upload path
    $targetDir = "C:/xampp/htdocs/MarthaArias/UploadedCot/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);



if(isset($_POST["CotButton"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file   formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server tmp_name
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            // Insert image file name into database
            $query = "UPDATE  cotizar 
          SET c_description='$description',
          s_mail ='$mail',
          c_image = '$fileName'
         WHERE c_username  = '$username' ";



            $result1 = mysqli_query($conn, $query);


            if($result1){
                header('Location: cotizacion.php ');
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

// $pass= md5($password)  f;
    /*
    $query = "UPDATE  user_profile
          SET u_name= '$uname',
          u_lastname ='$ulname',
          gender ='$gender',
          address ='$address',
          city ='$city',
          country ='$country',
          datebirth='$datebirth',
          mobilenum='$mobilenumber',
          active='1',
          u_img = '$img_name' 
          WHERE u_username = '$username'";


    $result = mysqli_query($conn, $query);

    if ($result) {


        header('Location: user.php'); // need to EDIT THIS LOCATION TO THE PROFILE VIEW PAGE
    } else {

        echo "Failed to update";
    }

*/

}


?>

