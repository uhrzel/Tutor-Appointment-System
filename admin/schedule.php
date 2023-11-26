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
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <title>Schedule</title>
    <style>
        .popup {
            animation: transitionIn-Y-bottom 0.5s;
        }

        .sub-table {
            background-color: #86D2C1;

            animation: transitionIn-Y-bottom 0.5s;
        }

        body {
            background-color: #cceeff;

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


    ?>
    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px">
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title">Administrator</p>
                                    <p class="profile-subtitle">admin@edoc.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../logout.php"><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
                <tr class="menu-row">
                    <td class="menu-btn ">
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z" />
                                    </svg>
                                    Dashboard
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn ">
                        <a href="teacher.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                                    </svg>
                                    Teachers
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>




                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="schedule.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="5" width="16" height="14" rx="2" ry="2" />
                                        <line x1="12" y1="3" x2="12" y2="5" />
                                        <line x1="12" y1="18" x2="12" y2="21" />
                                        <line x1="4" y1="9" x2="4" y2="9" />
                                        <line x1="20" y1="9" x2="20" y2="9" />
                                    </svg>
                                    Schedule
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="appointment.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon" style="font-size: 14px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z" />
                                    </svg>
                                    Appointment
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="student.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                    </svg>
                                    Students
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>

                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="teacher-logs.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <line x1="12" y1="16" x2="12" y2="12" />
                                        <line x1="12" y1="8" x2="12" y2="8" />
                                    </svg>
                                    Teacher Logs
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn">
                        <a href="student-logs.php" class="non-style-link-menu">
                            <div style="margin-right: 80px;">
                                <p class="menu-text menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <line x1="12" y1="16" x2="12" y2="12" />
                                        <line x1="12" y1="8" x2="12" y2="8" />
                                    </svg>
                                    Student Logs
                                </p>
                            </div>
                        </a>
                    </td>
                </tr>


            </table>
        </div>
        <div class="dash-body">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;margin-top:25px; ">
                <tr>
                    <td width="13%">
                        <a href="schedule.php"><button class="login-btn btn-primary-soft btn btn-icon-back" style="padding-top:11px;padding-bottom:11px;margin-left:20px;width:125px">
                                <font class="tn-in-text">Back</font>
                            </button></a>
                    </td>
                    <td>
                        <p style="font-size: 23px;padding-left:12px;font-weight: 600;">Shedule Manager</p>

                    </td>
                    <td width="15%">
                        <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;text-align: right;">
                            Today's Date
                        </p>
                        <p class="heading-sub12" style="padding: 0;margin: 0;">
                            <?php

                            date_default_timezone_set('Asia/Kolkata');

                            $today = date('Y-m-d');
                            echo $today;

                            $list110 = $database->query("select  * from  schedule;");

                            ?>
                        </p>
                    </td>
                    <td width="10%">
                        <button class="btn-label" style="display: flex;justify-content: center;align-items: center;"><img src="../img/calendar.svg" width="100%"></button>
                    </td>


                </tr>

                <tr>
                    <td colspan="4">
                        <div style="display: flex;margin-top: 40px;">
                            <div class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49);margin-top: 5px;">Schedule a Session</div>
                            <a href="?action=add-session&id=none&error=0" class="non-style-link"><button class="login-btn btn-primary btn button-icon" style="margin-left:25px;background-image: url('../img/icons/add.svg');">Add a Session</font></button>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="padding-top:10px;width: 100%;">

                        <p class="heading-main12" style="margin-left: 45px;font-size:18px;color:rgb(49, 49, 49)">All Sessions (<?php echo $list110->num_rows; ?>)</p>
                    </td>

                </tr>
                <tr>
                    <td colspan="4" style="padding-top:0px;width: 100%;">
                        <center>
                            <table class="filter-container" border="0">
                                <tr>
                                    <td width="10%">

                                    </td>
                                    <td width="5%" style="text-align: center;">
                                        Date:
                                    </td>
                                    <td width="30%">
                                        <form action="" method="post">

                                            <input type="date" name="sheduledate" id="date" class="input-text filter-container-items" style="margin: 0;width: 95%; background-color: #AFEEEE;">

                                    </td>
                                    <td width="5%" style="text-align: center;">
                                        Teacher:
                                    </td>
                                    <td width="30%">
                                        <select name="teacherid" id="" class="box filter-container-items" style="width:90% ;height: 37px;margin: 0; background-color: #AFEEEE;">
                                            <option value="" disabled selected hidden>Choose Teacher Name from the list</option><br />

                                            <?php

                                            $list11 = $database->query("select  * from  teacher order by teachername asc;");

                                            for ($y = 0; $y < $list11->num_rows; $y++) {
                                                $row00 = $list11->fetch_assoc();
                                                $sn = $row00["teachername"];
                                                $id00 = $row00["teacherid"];
                                                echo "<option value=" . $id00 . ">$sn</option><br/>";
                                            };


                                            ?>

                                        </select>
                                    </td>
                                    <td width="12%">
                                        <input type="submit" name="filter" value=" Filter" class=" btn-primary-soft btn button-icon btn-filter" style="padding: 15px; margin :0;width:100%">
                                        </form>
                                    </td>

                                </tr>
                            </table>

                        </center>
                    </td>

                </tr>

                <?php
                if ($_POST) {
                    //print_r($_POST);
                    $sqlpt1 = "";
                    if (!empty($_POST["sheduledate"])) {
                        $sheduledate = $_POST["sheduledate"];
                        $sqlpt1 = " schedule.scheduledate='$sheduledate' ";
                    }


                    $sqlpt2 = "";
                    if (!empty($_POST["teacherid"])) {
                        $docid = $_POST["teacherid"];
                        $sqlpt2 = " teacher.teacherid=$docid ";
                    }
                    //echo $sqlpt2;
                    //echo $sqlpt1;
                    $sqlmain = "select schedule.scheduleid,schedule.title,teacher.teachername,schedule.scheduledate,schedule.scheduletime,schedule.nop,schedule.app_fee from schedule inner join teacher on schedule.teacherid=teacher.teacherid ";
                    $sqllist = array($sqlpt1, $sqlpt2);
                    $sqlkeywords = array(" where ", " and ");
                    $key2 = 0;
                    foreach ($sqllist as $key) {

                        if (!empty($key)) {
                            $sqlmain .= $sqlkeywords[$key2] . $key;
                            $key2++;
                        };
                    };
                    //echo $sqlmain;



                    //
                } else {
                    $sqlmain = "select schedule.scheduleid,schedule.title,teacher.teachername,schedule.scheduledate,schedule.scheduletime,schedule.nop, schedule.app_fee from schedule inner join teacher on schedule.teacherid=teacher.teacherid  order by schedule.scheduledate desc";
                }



                ?>

                <tr>
                    <td colspan="4">
                        <center>
                            <div class="abc scroll">
                                <table width="93%" class="sub-table scrolldown" border="0">
                                    <thead>
                                        <tr>
                                            <th class="table-headin">


                                                Session Title

                                            </th>

                                            <th class="table-headin">
                                                Teacher
                                            </th>
                                            <th class="table-headin">

                                                Sheduled Date & Time

                                            </th>
                                            <th class="table-headin">

                                                Max num that can be booked

                                            </th>
                                            <th class="table-headin">

                                                Rate Per Session

                                            </th>

                                            <th class="table-headin">

                                                Events

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php


                                        $result = $database->query($sqlmain);

                                        if ($result->num_rows == 0) {
                                            echo '<tr>
                                    <td colspan="4">
                                    <br><br><br><br>
                                    <center>
                                    <img src="../img/notfound.svg" width="25%">
                                    
                                    <br>
                                    <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We  couldnt find anything related to your keywords !</p>
                                    <a class="non-style-link" href="schedule.php"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Sessions &nbsp;</font></button>
                                    </a>
                                    </center>
                                    <br><br><br><br>
                                    </td>
                                    </tr>';
                                        } else {
                                            for ($x = 0; $x < $result->num_rows; $x++) {
                                                $row = $result->fetch_assoc();
                                                $scheduleid = $row["scheduleid"];
                                                $title = $row["title"];
                                                $docname = $row["teachername"];
                                                $scheduledate = $row["scheduledate"];
                                                $scheduletime = $row["scheduletime"];
                                                $nop = $row["nop"];
                                                $fee = $row["app_fee"];
                                                echo '<tr>
                                        <td> &nbsp;' .
                                                    substr($title, 0, 30)
                                                    . '</td>
                                        <td>
                                        ' . substr($docname, 0, 20) . '
                                        </td>
                                        <td style="text-align:center;">
                                            ' . substr($scheduledate, 0, 10) . ' ' . substr($scheduletime, 0, 5) . '
                                        </td>
                                        <td style="text-align:center;">
                                            ' . $nop . '
                                        </td>
                                         <td style="text-align:center;">
                                            ' . $fee . '
                                        </td>

                                        <td>
                                        <div style="display:flex;justify-content: center;">
                                        
                                        <a href="?action=view&id=' . $scheduleid . '" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-view"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px;"><font class="tn-in-text">View</font></button></a>
                                       &nbsp;&nbsp;&nbsp;
                                       <a href="?action=drop&id=' . $scheduleid . '&name=' . $title . '" class="non-style-link"><button  class="btn-primary-soft btn button-icon btn-delete"  style="padding-left: 40px;padding-top: 12px;padding-bottom: 12px;margin-top: 10px; color: red"><font class="tn-in-text">Remove</font></button></a>
                                        </div>
                                        </td>
                                    </tr>';
                                            }
                                        }

                                        ?>

                                    </tbody>

                                </table>
                            </div>
                        </center>
                    </td>
                </tr>



            </table>
        </div>
    </div>
    <?php

    if ($_GET) {
        $id = $_GET["id"];
        $action = $_GET["action"];
        if ($action == 'add-session') {

            echo '
            <div id="popup1" class="overlay">
                    <div class="popup" style="background-color: #59baa3;">
                    <center>
                    
                    
                        <a class="close" href="schedule.php">&times;</a> 
                        <div style="display: flex;justify-content: center;">
                        <div class="abc">
                        <table width="80%" class="sub-table scrolldown add-doc-form-container" border="0">
                        <tr>
                                <td class="label-td" colspan="2">' .
                ""

                . '</td>
                            </tr>

                            <tr>
                                <td>
                                    <p style="padding: 0;margin: 0;text-align: left;font-size: 25px;font-weight: 500;">Add New Session.</p><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                <form action="add-session.php" method="POST" class="add-new-form">
                                    <label for="title" class="form-label">Session Title : </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="text" name="title" style="background-color: #AFEEEE;" class="input-text" placeholder="Name of this Session" required><br>
                                </td>
                            </tr>
                            <tr>
                                
                                <td class="label-td" colspan="2">
                                    <label for="teacherid"  class="form-label">Select Teacher: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <select name="teacherid" id="" class="box"  style="background-color: #AFEEEE;">
                                    <option value="" disabled selected hidden>Choose Teacher Name from the list</option><br/>';


            $list11 = $database->query("select  * from  teacher order by teachername asc;");

            for ($y = 0; $y < $list11->num_rows; $y++) {
                $row00 = $list11->fetch_assoc();
                $sn = $row00["teachername"];
                $id00 = $row00["teacherid"];
                echo "<option value=" . $id00 . ">$sn</option><br/>";
            };




            echo     '       </select><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="nop"   class="form-label">Number of Student/Appointment Numbers : </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="number"  style="background-color: #AFEEEE;" name="nop" class="input-text" min="0"  placeholder="The final appointment number for this session depends on this number" required><br>
                                </td>
                            </tr>
                               <tr>
                                <td class="label-td" colspan="2">
                                    <label for="nop" class="form-label">Fee per Session : </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="number"  style="background-color: #AFEEEE;"  name="fee" class="input-text" min="0"  placeholder="Session Fee" required><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="date"   class="form-label">Session Date: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="date" style="background-color: #AFEEEE;" name="date" class="input-text" min="' . date('Y-m-d') . '" required><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="time"  class="form-label">Schedule Time: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <input type="time" name="time"  style="background-color: #AFEEEE;" class="input-text" placeholder="Time" required><br>
                                </td>
                            </tr>
                           
                            <tr>
                                <td colspan="2">
                                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                    <input type="submit" value="Place this Session" class="login-btn btn-primary btn" name="shedulesubmit">
                                </td>
                
                            </tr>
                           
                            </form>
                            </tr>
                        </table>
                        </div>
                        </div>
                    </center>
                    <br><br>
            </div>
            </div>
            ';
        } elseif ($action == 'session-added') {
            $titleget = $get["title"];
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup" style="background-color: #86D2C1;">
                    <center>
                    <br><br>
                        <h2>Session Placed.</h2>
                        <a class="close" href="schedule.php">&times;</a>
                        <div class="content">
                        ' . substr($titleget, 0, 40) . ' was scheduled.<br><br>
                            
                        </div>
                        <div style="display: flex;justify-content: center;">
                        
                        <a href="schedule.php" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;OK&nbsp;&nbsp;</font></button></a>
                        <br><br><br><br>
                        </div>
                    </center>
            </div>
            </div>
            ';
        } elseif ($action == 'drop') {
            $nameget = $_GET["name"];
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup" style="background-color: #ff3333">
                    <center>
                        <h2>Are you sure?</h2>
                        <a class="close" href="schedule.php">&times;</a>
                        <div class="content">
                            You want to delete this record<br>(' . substr($nameget, 0, 40) . ').
                            
                        </div>
                        <div style="display: flex;justify-content: center;">
                        <a href="delete-session.php?id=' . $id . '" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"<font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                        <a href="schedule.php" class="non-style-link"><button  class="btn-primary btn"  style="display: flex;justify-content: center;align-items: center;margin:10px;padding:10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>

                        </div>
                    </center>
            </div>
            </div>
            ';
        } elseif ($action == 'view') {
            $sqlmain = "select schedule.scheduleid,schedule.title,teacher.teachername,schedule.scheduledate,schedule.scheduletime,schedule.nop, schedule.app_fee from schedule inner join teacher on schedule.teacherid=teacher.teacherid  where  schedule.scheduleid=$id";
            $result = $database->query($sqlmain);
            $row = $result->fetch_assoc();
            $docname = $row["teachername"];
            $scheduleid = $row["scheduleid"];
            $title = $row["title"];
            $scheduledate = $row["scheduledate"];
            $scheduletime = $row["scheduletime"];
            $fee = $row["app_fee"];


            $nop = $row['nop'];


            $sqlmain12 = "select * from appointment inner join student on student.studentid=appointment.studentid inner join schedule on schedule.scheduleid=appointment.scheduleid where schedule.scheduleid=$id;";
            $result12 = $database->query($sqlmain12);
            echo '
            <div id="popup1" class="overlay">
                    <div class="popup" style="width: 70%; background-color: #59baa3;">
                    <center>
                        <h2></h2>
                        <a class="close" href="schedule.php">&times;</a>
                        <div class="content">
                            
                            
                        </div>
                        <div class="abc scroll" style="display: flex;justify-content: center;">
                        <table width="80%" class="sub-table scrolldown add-doc-form-container" border="0">
                        
                            <tr>
                                <td>
                                    <p style="padding: 0;margin: 0;text-align: left;font-size: 25px;font-weight: 500;">View Details.</p><br><br>
                                </td>
                            </tr>
                            
                            <tr>
                                
                                <td class="label-td" colspan="2">
                                    <label for="name" class="form-label">Session Title: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    ' . $title . '<br><br>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="Email" class="form-label">Teacher of this session: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                ' . $docname . '<br><br>
                                </td>
                            </tr>
                              <tr>
                                <td class="label-td" colspan="2">
                                    <label for="fee" class="form-label">Rate per session </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                ' . $fee . '<br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="nic" class="form-label">Scheduled Date: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                ' . $scheduledate . '<br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="Tele" class="form-label">Scheduled Time: </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                ' . $scheduletime . '<br><br>
                                </td>
                            </tr>
                            <tr>
                                <td class="label-td" colspan="2">
                                    <label for="spec" class="form-label"><b>Students that Already registerd for this session:</b> (' . $result12->num_rows . "/" . $nop . ')</label>
                                    <br><br>
                                </td>
                            </tr>

                            
                            <tr>
                            <td colspan="4">
                                <center>
                                 <div class="abc scroll">
                                 <table width="100%" class="sub-table scrolldown" border="0">
                                 <thead>
                                 <tr>   
                                        <th class="table-headin">
                                             Student ID
                                         </th>
                                         <th class="table-headin">
                                             Student name
                                         </th>
                                         <th class="table-headin">
                                             
                                             Appointment number
                                             
                                         </th>
                                        
                                         <th class="table-headin">
                                             Student Telephone
                                         </th>
                                         
                                 </thead>
                                 <tbody>';




            $result = $database->query($sqlmain12);

            if ($result->num_rows == 0) {
                echo '<tr>
                                             <td colspan="7">
                                             <br><br><br><br>
                                             <center>
                                             <img src="../img/notfound.svg" width="25%">
                                             
                                             <br>
                                             <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We  couldnt find anything related to your keywords !</p>
                                             <a class="non-style-link" href="appointment.php"><button  class="login-btn btn-primary-soft btn"  style="display: flex;justify-content: center;align-items: center;margin-left:20px;">&nbsp; Show all Appointments &nbsp;</font></button>
                                             </a>
                                             </center>
                                             <br><br><br><br>
                                             </td>
                                             </tr>';
            } else {
                for ($x = 0; $x < $result->num_rows; $x++) {
                    $row = $result->fetch_assoc();
                    $apponum = $row["apponum"];
                    $pid = $row["studentid"];
                    $pname = $row["studentname"];
                    $ptel = $row["studenttel"];

                    echo '<tr style="text-align:center;">
                                                <td>
                                                ' . substr($pid, 0, 15) . '
                                                </td>
                                                 <td style="font-weight:600;padding:25px">' .

                        substr($pname, 0, 25)
                        . '</td >
                                                 <td style="text-align:center;font-size:23px;font-weight:500; color: var(--btnnicetext);">
                                                 ' . $apponum . '
                                                 
                                                 </td>
                                                 <td>
                                                 ' . substr($ptel, 0, 25) . '
                                                 </td>
                                                 
                                                 
                
                                                 
                                             </tr>';
                }
            }



            echo '</tbody>
                
                                 </table>
                                 </div>
                                 </center>
                            </td> 
                         </tr>

                        </table>
                        </div>
                    </center>
                    <br><br>
            </div>
            </div>
            ';
        }
    }

    ?>
    </div>

</body>

</html>