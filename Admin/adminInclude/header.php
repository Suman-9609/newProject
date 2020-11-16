<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubantu">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/adminStyle.css">
    <title>Document</title>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-2 shadow" style="background-color: #225470;">
        <a href="adminDashBoard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learning <small class="text-white">Admin Area</small></a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 50px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="adminDashBoard.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="courses.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lessons.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Lesson
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="student.php" class="nav-link">
                                <i class="fas fa-users"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminDashBoard.php" class="nav-link">
                                <i class="fas fa-table"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminDashBoard.php" class="nav-link">
                                <i class="fas fa-table"></i>
                                Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminDashBoard.php" class="nav-link">
                                <i class="fas fa-accessible-icon"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminChangePass.php" class="nav-link">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>