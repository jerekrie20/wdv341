<?php
	session_start();
	
	$firstName = $_POST['first_name'];

	$lastName= $_POST['last_name'];
	
	$personalEmail = $_POST['personal_email'];

	$reasonContact = $_POST['reason_contact'];

	$customerComment = $_POST['customer_comments'];

	
	$_SESSION['firstName'] = $_POST['first_name'];

	$_SESSION['lastName']= $_POST['last_name'];
	
	$_SESSION['personalEmail'] = $_POST['personal_email'];

	$_SESSION['reasonContact'] = $_POST['reason_contact'];

	$_SESSION['customerComment'] = $_POST['customer_comments'];


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

    <link rel="stylesheet" href="../css/structure.css">
   
    <link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet"  href="../css/phpStyle.css">

  

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <style>
  .block {
        background-color: #F2F2F2;
        padding: 2.5em;
    }
    </style>
</head>

<body>
<div class="container-fluid">

<nav class="navbar navbar-expand-sm white navbarlight justify-content-center ">

	<!-- Brand/logo -->
	<a class="navbar-brand" href="index.html"> <img src="../images/home/Zodiac PC.png" width="30%" height="auto" alt="Zodiac Logo"></a>

<!-- Toggler/collapsibe Button -->
<button class="fa fa-bars" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	<span class="navbar-toggler-icon"></span>
 </button>

	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="../index.html">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="../desktop.html">Desktop</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="../laptop.html">Laptop</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="../customize.html">Customize</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="../shop.html">Shop</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				  Company
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../about.html">About</a>
					<a class="dropdown-item" href="../contact.php">Contact</a>
					<a class="dropdown-item" href="#">Q&A</a>
				</div>
			</li>
		</ul>
	</div>

</nav>

<div class="card">
	<div class="header">
		Submission 
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item"><?php echo "Name: ". $firstName. " " . $lastName ?></li>
		<li class="list-group-item"><?php echo "Contact Email: $personalEmail" ?></li>
		<li class="list-group-item"> <?php echo "Reason for Contact: $reasonContact" ?></li>
		<li class="list-group-item"><?php echo "Comments: <br> $customerComment " ?></li>
	</ul>
	<div class="card-footer">
		<form action="emailer.php" method="POST">
		<input type="submit" name="submit" id="submit" class="button"></button>
		</form>	
  </div>

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
                    <p style="text-align: center;">Thank you for spending your time look over this webiste</p>

                </div>
                <div class="col-md-2">
                    <ul>
                        <li>
                            <a href="../index.html">Home</a>
                        </li>
                        <li>
                            <a href="../desktop.html">Desktop</a>
                        </li>
                        <li>
                            <a href="../laptop.html">Laptop</a>
                        </li>
                        <li>
                            <a href="../customize.html">Customize</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul>
                        <li>
                            <a href="../index.html">About</a>
                        </li>
                        <li>
                            <a href="../desktop.html">Contact</a>
                        </li>
                        <li>
                            <a href="../laptop.html">Community</a>
                        </li>
                        <li>
                            <a href="../customize.html">Q&A</a>
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
