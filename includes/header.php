<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- T.I.T.L.E -->
    <title><?php echo $pageTitle ?> | Appointment Management System</title>

    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />

    <link rel="stylesheet" href="css/form.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/components/transition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/components/dropdown.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Marcellus&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body data-spy="scroll" data-target="#side-nav" data-offset="250">
    <div class="header">
        <section class="nav-section py-3">
            <div class="container">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="AMS Logo" class="logo-img">
                    </a>
                </div>
                <div class="nav-wrapper">
                    <div class="close" id="close"><i class="fa fa-times"></i></div>
                </div>
                <ul class="list-unstyled nav-icons mb-0 pt-1 pt-lg-0">
                    <li class="header-right">
                        <div class="header-icon">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="header-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </li>
                    <!-- Before Login -->
                    <!-- <li>
                        <a class="user-icon text-color text-nowrap ml-3" data-toggle="modal"
                            data-target="#user_login_Modal" href="#">
                            <span class="d-none d-md-inline">Login / Register</span> <span class="d-md-none"><i
                                    class="far fa-user fa-2x"></i></span>
                        </a>
                    </li> -->
                    <!-- Before Login -->
                    <li>
                        <div class="username"><a class="user-sub ml-3 text-color text-nowrap" href="#"
                                aria-label="User menu for appointment management system">
                                <span class="d-none d-md-inline text-color">Username</span> <span class="d-md-none"><i
                                        class="far fa-user fa-2x"></i></span> <i class="fa fa-caret-down"></i></a>
                            <ul class="sub-menu list-unstyled mb-0 p-2">
                                <li><a class="text-nowrap" href="user-dashboard.php"><i
                                            class="fa fa-tachometer-alt mr-2"></i> Dashboard</a></li>
                                <li><a class="text-nowrap" href="user-dashboard.php#nav-myorder"><i
                                            class="fa fa-list mr-2"></i> My
                                        Bookings</a></li>
                                <li><a class="text-nowrap" href="user-dashboard.php#nav-myprofile"><i
                                            class="fa fa-user mr-2"></i>
                                        My Profile</a></li>
                                <li><a class="text-nowrap" href="#" data-toggle="modal"
                                        data-target="#logout_confirm_Modal"><i class="fa fa-sign-out-alt mr-2"></i>
                                        Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><span id="menu-bar" class="d-inline-block"><i
                                class="fa fa-bars text-color fa-2x ml-3"></i></span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <?php
    include 'terms-modal.php';
    include 'forgot-password-modal.php';
    ?>