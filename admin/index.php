<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Dashboard</title>
    <style>
        .dashbord-tables {
            animation: transitionIn-Y-over 0.5s;
        }

        .filter-container {
            animation: transitionIn-Y-bottom 0.5s;
        }

        .sub-table {
            animation: transitionIn-Y-bottom 0.5s;
        }

        .dashboard-items {
            background-color: #59baa3;
        }

        body {
            background-color: teal;
        }

        .dashbord-tables {
            background-color: #5A4FCF;
        }
    </style>


</head>

<style>

</style>

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
        <div class="dash-body" style="margin-top: 15px">
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;">

                <tr>

                    <td colspan="2" class="nav-bar">

                        <form action="teacher.php" method="post" class="header-search">

                            <input type="search" name="search" style=" background-color: #AFEEEE;" class="input-text header-searchbar" placeholder="Search Teacher name or Email" list="doctors">&nbsp;&nbsp;

                            <?php
                            echo '<datalist id="doctors">';
                            $list11 = $database->query("select  teachername,teacheremail from  teacher;");

                            for ($y = 0; $y < $list11->num_rows; $y++) {
                                $row00 = $list11->fetch_assoc();
                                $d = $row00["teachername"];
                                $c = $row00["teacheremail"];
                                echo "<option value='$d'><br/>";
                                echo "<option value='$c'><br/>";
                            };

                            echo ' </datalist>';
                            ?>


                            <input type="Submit" value="Search" class="login-btn btn-primary-soft btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">

                        </form>

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


                            $patientrow = $database->query("select  * from  student;");
                            $doctorrow = $database->query("select  * from  teacher;");
                            $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                            $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                            ?>
                        </p>
                    </td>
                    <td width="10%">
                        <button class="btn-label" style="display: flex;justify-content: center;align-items: center;"><img src="../img/calendar.svg" width="100%"></button>
                    </td>


                </tr>
                <tr>
                    <td colspan="4">

                        <center>
                            <table class="filter-container" style="border: none;" border="0">
                                <tr>
                                    <td colspan="4">
                                        <p style="font-size: 20px;font-weight:600;padding-left: 12px;">Status</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%;">
                                        <div class="dashboard-items" style="padding:20px;margin:auto;width:95%;display: flex">
                                            <div>
                                                <div class="h1-dashboard">
                                                    <?php echo $doctorrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Teachers &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                            <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/teacher-hover.svg');"></div>
                                        </div>
                                    </td>
                                    <td style="width: 25%;">
                                        <div class="dashboard-items" style="padding:20px;margin:auto;width:95%;display: flex;">
                                            <div>
                                                <div class="h1-dashboard">
                                                    <?php echo $patientrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                            <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/student-hover.svg');"></div>
                                        </div>
                                    </td>
                                    <td style="width: 25%;">
                                        <div class="dashboard-items" style="padding:20px;margin:auto;width:95%;display: flex; ">
                                            <div>
                                                <div class="h1-dashboard">
                                                    <?php echo $appointmentrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    NewBooking &nbsp;&nbsp;
                                                </div>
                                            </div>
                                            <div class="btn-icon-back dashboard-icons" style="margin-left: 0px;background-image: url('../img/icons/book-hover.svg');"></div>
                                        </div>
                                    </td>
                                    <td style="width: 25%;">
                                        <div class="dashboard-items" style="padding:20px;margin:auto;width:95%;display: flex;padding-top:26px;padding-bottom:26px;">
                                            <div>
                                                <div class="h1-dashboard">
                                                    <?php echo $schedulerow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard" style="font-size: 15px">
                                                    Today Sessions
                                                </div>
                                            </div>
                                            <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/session-iceblue.svg');"></div>
                                        </div>
                                    </td>

                                </tr>
                            </table>
                        </center>
                    </td>
                </tr>



                <tr>
                    <td colspan="4">
                        <table width="100%" border="0" class="dashbord-tables">
                            <tr>
                                <td>
                                    <p style="padding:10px;padding-left:48px;padding-bottom:0;font-size:23px;font-weight:700;color: #193366;">
                                        Upcoming Appointments until Next <?php
                                                                            echo date("l", strtotime("+1 week"));
                                                                            ?>
                                    </p>
                                    <p style="padding-bottom:19px;padding-left:50px;font-size:15px;font-weight:500;color: #212529e3;line-height: 20px;">
                                        Here's Quick access to Upcoming Appointments until 7 days<br>
                                        More details available in @Appointment section.
                                    </p>

                                </td>
                                <td>
                                    <p style="text-align:right;padding:10px;padding-right:48px;padding-bottom:0;font-size:23px;font-weight:700;color: #193366;">
                                        Upcoming Sessions until Next <?php
                                                                        echo date("l", strtotime("+1 week"));
                                                                        ?>
                                    </p>
                                    <p style="padding-bottom:19px;text-align:right;padding-right:50px;font-size:15px;font-weight:500;color:#212529e3;line-height: 20px;">
                                        Here's Quick access to Upcoming Sessions that Scheduled until 7 days<br>
                                        Add,Remove and Many features available in @Schedule section.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <center>
                                        <div class="abc scroll" style="height: 200px;">
                                            <table width="85%" class="sub-table scrolldown" border="0">
                                                <thead>
                                                    <tr>
                                                        <th class="table-headin" style="font-size: 12px;">

                                                            Appointment number

                                                        </th>
                                                        <th class="table-headin">
                                                            Student name
                                                        </th>
                                                        <th class="table-headin">


                                                            Teacher

                                                        </th>
                                                        <th class="table-headin">


                                                            Session

                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $nextweek = date("Y-m-d", strtotime("+1 week"));
                                                    $sqlmain = "select appointment.appoid,schedule.scheduleid,schedule.title,teacher.teachername,student.studentname,schedule.scheduledate,schedule.scheduletime,appointment.apponum,appointment.appodate from schedule inner join appointment on schedule.scheduleid=appointment.scheduleid inner join student on student.studentid=appointment.studentid inner join teacher on schedule.teacherid=teacher.teacherid  where schedule.scheduledate>='$today'  and schedule.scheduledate<='$nextweek' order by schedule.scheduledate desc";

                                                    $result = $database->query($sqlmain);

                                                    if ($result->num_rows == 0) {
                                                        echo '<tr>
                                                    <td colspan="3">
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
                                                            $appoid = $row["appoid"];
                                                            $scheduleid = $row["scheduleid"];
                                                            $title = $row["title"];
                                                            $docname = $row["teachername"];
                                                            $scheduledate = $row["scheduledate"];
                                                            $scheduletime = $row["scheduletime"];
                                                            $pname = $row["teachername"];
                                                            $apponum = $row["apponum"];
                                                            $appodate = $row["appodate"];
                                                            echo '<tr>


                                                        <td style="text-align:center;font-size:23px;font-weight:500; color: var(--btnnicetext);padding:20px;">
                                                            ' . $apponum . '
                                                            
                                                        </td>

                                                        <td style="font-weight:600;"> &nbsp;' .

                                                                substr($pname, 0, 25)
                                                                . '</td >
                                                        <td style="font-weight:600;"> &nbsp;' .

                                                                substr($docname, 0, 25)
                                                                . '</td >
                                                           
                                                        
                                                        <td>
                                                        ' . substr($title, 0, 15) . '
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
                                <td width="50%" style="padding: 0;">
                                    <center>
                                        <div class="abc scroll" style="height: 200px;padding: 0;margin: 0;">
                                            <table width="85%" class="sub-table scrolldown" border="0">
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

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $nextweek = date("Y-m-d", strtotime("+1 week"));
                                                    $sqlmain = "select schedule.scheduleid,schedule.title,teacher.teachername,schedule.scheduledate,schedule.scheduletime,schedule.nop from schedule inner join teacher on schedule.teacherid=teacher.teacherid  where schedule.scheduledate>='$today' and schedule.scheduledate<='$nextweek' order by schedule.scheduledate desc";
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
                                                            echo '<tr>
                                                        <td style="padding:20px;"> &nbsp;' .
                                                                substr($title, 0, 30)
                                                                . '</td>
                                                        <td>
                                                        ' . substr($docname, 0, 20) . '
                                                        </td>
                                                        <td style="text-align:center;">
                                                            ' . substr($scheduledate, 0, 10) . ' ' . substr($scheduletime, 0, 5) . '
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
                            <tr>
                                <td>
                                    <center>
                                        <a href="appointment.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Show all Appointments</button></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="schedule.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Show all Sessions</button></a>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
            </center>
            </td>
            </tr>
            </table>
        </div>
    </div>


</body>

</html>