<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>iscool</title>
</head>

<body>

    <!--Start Navigation Bar -->

    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo">iscool</a>

            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.php" class="navbar__link">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__link">About</a>
                </li>
                <li class="navbar__item">
                    <a href="courses.php" class="navbar__link">Courses</a>
                </li>
                <li class="navbar__item">
                    <a href="paymentStatus.php" class="navbar__link">Payment Status</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__link">Contact Us</a>
                </li>
                <li class="navbar__item">
                    <a href="/" class="navbar__link">Feedback</a>
                </li>

                <?php
                session_start();
                if (isset($_SESSION['is_login'])) {
                    echo '<li class="navbar__btn">
                    <a href="/" class="button">My Profile</a>
                </li>
                <li class="navbar__btn">
                    <a href="logout.php" class="button">Logout</a>
                </li>';
                } else {
                    echo '<li class="navbar__btn">
                    <a href="" class="button" data-toggle="modal" data-target="#stuLogModalCenter">Login</a>
                </li>
                <li class="navbar__btn">
                    <a href="" class="button" data-toggle="modal" data-target="#stuRegModalCenter">Sign Up</a>
                </li>';
                }
                ?>
            </ul>
        </div>
    </nav>

    <!--End Navigation Bar -->