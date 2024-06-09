<?php
session_start();
if(!isset($_SESSION['user_session'])) {
    header("Location: login.php");
    // exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <header>
        <div class="navbar postion-relative">

            <div class="head">
                <div class="first_one">
                    <div class="nav-logo"></div>
                    <div class="logo-name">Bangladesh Tourist Guide</div>
                </div>
                <!-- <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                <div class="plan">
                    <a href="login.php">Plan My Holiday</a>
                </div>

                <div class="log">
                    <a class="userLog">
                        <?php isset($_SESSION['user_session']) ? print "Logout": print "Login" 
                        
                        ?>
                    </a>

                </div>

            </div>

            <div class="msg">
                <p> Get Ready To Go AnyWhere</p>


                <div class="search">
                    <div class="bar-icon">
                        <i class="fa-solid fa-magnifying-glass-location"></i>
                    </div>

                    <div class="search-bar">

                        <input class="search-bar" type="text" name="search" placeholder="Explore Your Next Stop">
                    </div>
                    <div class="search-icon">

                        <button type="submit" name="submit" class="src">Search</button>

                    </div>

                </div> 
            </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="script/app.js"></script>
    </header>