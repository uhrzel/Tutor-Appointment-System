<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/doc.jpg" />
    <title>Doctor</title>
    <style>
        .popup {
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
</head>

<body>
    <?php

    //learn from w3schools.com

    session_start();

    if (isset($_SESSION["user"])) {
        if (($_SESSION["user"]) == "" or $_SESSION['usertype'] != 'a') {
            header("location: ../login.php");
        }
    } else {
        header("location: ../login.php");
    }



    //import database
    include("../connection.php");



    if ($_POST) {
        //print_r($_POST);
        $result = $database->query("select * from webuser");
        $name = $_POST['name'];
        $nic = $_POST['nic'];
        $spec = $_POST['spec'];
        $email = $_POST['email'];
        $tele = $_POST['Tele'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password == $cpassword) {
            $error = '3';
            $result = $database->query("select * from webuser where email='$email';");
            if ($result->num_rows == 1) {
                $error = '1';
            } else {

                $hashed_p = md5($password);

                $sql1 = "insert into doctor(docemail,docname,docpassword,docnic,doctel,specialties) values('$email','$name','$hashed_p','$nic','$tele',$spec);";
                $database->query($sql1);

                $sql2 = "insert into webuser(email, usertype) values('$email','d');";
                $database->query($sql2);

                require('../PHPMailer/PHPMailerAutoload.php');
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'ojt.rms.group.4@gmail.com';
                $mail->Password = 'hbpezpowjedwoctl';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->setFrom('Medical Appointment System');
                $mail->addAddress($email);
                $mail->addReplyTo('Medical Appointment System');
                $mail->isHTML(true);
                $mail->Subject = 'Account Created';

                $mail->Body = '<h1 align=center>Account Created</h1><br><h3 align=center>Dear ' . $name . ',</h3><br><p align=center>Your account has been created successfully.</p><br><p align=center>Thank you.</p><br><p align=center>Email: ' . $email . '</p><br><p align=center>Password: ' . $password . '</p>';
                $mail->AltBody = 'Account Created';

                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message has been sent';
                }

                //echo $sql1;
                //echo $sql2;
                $error = '4';
            }
        } else {
            $error = '2';
        }
    } else {
        //header('location: signup.php');
        $error = '3';
    }


    header("location: doctors.php?action=add&error=" . $error);
    ?>



</body>

</html>