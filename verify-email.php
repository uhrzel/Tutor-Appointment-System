<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>Verify Email</title>
    <style>
        .container {
            animation: transitionIn-X 0.5s;
        }
    </style>
</head>

<body>
    <?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

if(!isset($_SESSION["verify-otp"])){
    header("Location: login.php");
}

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;

$email = $_SESSION['verify-email'];

//import database
include("connection.php");

$sqlmain= "select * from otp where email=?;";
$stmt = $database->prepare($sqlmain);
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$otp = $row['otp_code'];

// check if there is otp code 
if($otp == ""){
    header("Location: login.php");
}

// check if the user is already verified
$sqlmain= "select * from webuser where email=?;";
$stmt = $database->prepare($sqlmain);
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if($row['status'] == 1){
    header("Location: login.php");
}

$error = "";

if($_POST){

    $otp_code = $_POST['otp_code'];

    if($otp_code == $otp){
        $sqlmain= "update webuser set status=1 where email=?;";
        $stmt = $database->prepare($sqlmain);
        $stmt->bind_param("s",$email);
        $stmt->execute();

        $sqlmain= "delete from otp where email=?;";
        $stmt = $database->prepare($sqlmain);
        $stmt->bind_param("s",$email);
        $stmt->execute();

        // unset session variables
        unset($_SESSION['verify-email']);
        unset($_SESSION['verify-otp']);
        header("Location: login.php");
    }else{
        $error = "<p class='error-text'>Invalid Verification Code</p>";
    }
}

?>


    <center>
        <div class="container">
            <table border="0" style="width: 69%;">
                <form action="" method="POST">
                    <tr>
                        <td colspan="2">
                            <p class="header-text">Verify Email</p>
                            <p class="sub-text">
                                Please enter the verification code sent to your email address
                            </p>
                            <h3 class="sub-text">Email: <?= $email ?></h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <label for="otp_code" class="form-label">Verification Code: </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="label-td" colspan="2">
                            <input type="number" maxlength="6" id="otp_code" name="otp_code" minlength="6" class="input-text" placeholder="Enter Verification Code" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?= $error ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                        </td>
                        <td>
                            <input type="submit" value="Verify" class="login-btn btn-primary btn">
                        </td>

                    </tr>

                </form>
            </table>

        </div>
    </center>
</body>

</html>