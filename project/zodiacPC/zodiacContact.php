<?php
     session_start();
?>
<!DOCTYPE html>

<html>

<head>

    <title>Zodiac PC </title>
    <!--
        Auother: Jeremiah Kriegel
        Date: April 5, 2021
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/structure.css">


    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" href="css/contact.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>

    </style>
</head>

<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-sm white navbarlight justify-content-center ">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="index.html"> <img src="images/home/Zodiac PC.png" width="30%" height="auto" alt="Zodiac Logo"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="fa fa-bars" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
             </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="desktop.html">Desktop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="laptop.html">Laptop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="customize.html">Customize</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Company
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about.html">About</a>
                            <a class="dropdown-item" href="zodiacContact.php">Contact</a>
                            <a class="dropdown-item" href="#">Q&A</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>

        <!--Heading-->
        <div class="row">
            <div class="col-md-12">
                <h1>Contact US</h1>.
            </div>
        </div>

        <!--Form-->
        <div class="form">
            <!-- 
                Contact Name: text field  -- First and Last Name  >>Done
                Contact Email: Input Email >> Done -- do a short validation when submit !not the most import right now
                Reasons for Contact: Drop down list -- Build if html first(for time) -- use Javascript or Jquery Later
                Comments: Textera
            -->
            <form action="php/DemonstrateFormHandler.php" method="POST">


                <div>
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="">

                </div>

                <div>
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="">
                </div>

                <div>
                    <label for="personal_email" class="form-label">Contact Email</label>
                    <input type="email" class="form-control" id="personal_email" name="personal_email" value="">
                </div>

                <div>
                    <label for="reason_contact" class="form-label">Reason For Contact</label>
                    <select class="form-select" id="reason_contact" name="reason_contact">
                        <option value="">Please Select an Issue</option>
                        <option value="PC is down">PC is down</option>
                        <option value="shipping">Shipping</option>
                        <option value="overcharged">Overcharged</option>
                        <option value="returns">Returns</option>
                        <!--Need to add other with a text box that will shop up-->
                    </select>
                </div>

                <div>
                    <label for="customer_comments" class="form-label">Comments</label>
                    <textarea class="form-control" name="customer_comments"  placeholder="Describe your problem or reason for contact" rows="5" cols="25" >
                    </textarea>
                </div>

                <div>
                    <input type="submit" name="submit" id="submit" class="button">
                    <input type="reset" name="reset" id="reset" class="button">
                </div>




            </form>
        </div>

       





        <div class="block">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-4">
                    <h4>THIS WEBSITE IS FOR SCHOOL PURPOSES ONLY</h4>
                    <p>THank you for spending your time look over this webiste</p>

                </div>
                <div class="col-md-2">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="desktop.html">Desktop</a>
                        </li>
                        <li>
                            <a href="laptop.html">Laptop</a>
                        </li>
                        <li>
                            <a href="customize.html">Customize</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                        <a href="zodiacContact.php">Contact</a>
                        </li>
                        <li>
                            <a href="#">Community</a>
                        </li>
                        <li>
                            <a href="#">Q&A</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Add font awesome icons -->
                    <a href="https://www.facebook.com/originpc/" target="blank" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/ORIGINPC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a>
                    <a href="https://www.youtube.com/user/ORIGINPC" target="blank" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/originpc/?hl=en" target="blank" class="fa fa-instagram"></a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>