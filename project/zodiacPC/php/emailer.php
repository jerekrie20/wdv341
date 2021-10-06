
<?php
session_start();

    $firstName = $_SESSION['firstName'];

	$lastName= $_SESSION['lastName'];
	
	$personalEmail = $_SESSION['personalEmail'];

	$reasonContact = $_SESSION['reasonContact'];

	$customerComment = $_SESSION['customerComment'];

//testing the email() in PHP

//getting the current date
$newDate = date_create();
$currentDate = date_format($newDate, "m/d/Y");

//mail
$to = $personalEmail;
$subject = $reasonContact;
$message = "
<html>

<head>
<title>$reasonContact</title>
</head>

<body style = 'background-color:#F2F2F2' >

<h1 style = 'text-align:center' > <span style = 'color:#0D0D0D'>Hello</span> <span style = 'color:#04d9fe'>$firstName, $lastName</span></h1>

<h4 style = 'color:#0D0D0D; text-align:center''>Date Recieved: $currentDate</h4>

<h3 style = 'color:#0D0D0D; text-align:center''>You are contacting us because you are having trouble with: <span style = 'color:#04d9fe'>$reasonContact</span> right?</h3>

<h3 style = 'color:#0D0D0D; text-align:center''> Comment: <br> $customerComment </h3>

<h2 style = 'color:#0D0D0D; text-align:center''> Thank you for your <span span style = 'color:#04d9fe'> feedback, </span> we will get back to you in 2-4 business days</h2>

</body>
</html>
";
$headers = "From: support@jmkweb.us" . "\r\n" ;

// Always set content-type when sending HTML email
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 if (mail($to,$subject,$message,$headers) ){

    clientMessage($firstName, $lastName, $currentDate,$personalEmail,$reasonContact, $customerComment);
 }
 else{
     echo "email Failed";
 }

 
function clientMessage($firstName, $lastName, $currentDate,$personalEmail,$reasonContact, $customerComment){
 $to="support@jmkweb.us";
 $subject = "customer Feeback";
 $message = "
<html>

<head>
<title> Customer FeedBack</title>
</head>

<body style = 'background-color:#F2F2F2' >

<h1 style = 'text-align:center' > <span style = 'color:#04d9fe'>$firstName, $lastName</span> </h1>

<h4 style = 'color:#0D0D0D; text-align:center''>Contact Date: $currentDate</h4>

<h3 style = 'color:#0D0D0D; text-align:center''>Point of Contact: <span style = 'color:#04d9fe'>$personalEmail</span> </h3>

<h3 style = 'color:#0D0D0D; text-align:center''>Reason for Contacting: <span style = 'color:#04d9fe'>$reasonContact</span></h3>

<h3 style = 'color:#0D0D0D; text-align:center''> Customer Comments: <br> $customerComment <br> </h3>

</body>
</html>
 ";

$headers = "From: support@jmkweb.us" . "\r\n" ;
// Always set content-type when sending HTML email
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if (mail($to,$subject,$message,$headers) ){
 }
 else{
     echo "email Failed";
 }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/emailer.css">;
    <link rel="stylesheet" href="../css/modal.css">;


     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function displayModal() {
            myModal = document.getElementById("noticeModal");
            myModal.style.display = "block";
            console.log("Did it display?")
        }

        //end

        // When the user clicks on <span> (x), close the modal
        function closeModal() {
            myModal.style.display = "none";
        }
    </script>

</head>
<body onload=" displayModal() ">


  <!--The modal-->
  <div id="noticeModal" class="modal">
            <!--Content-->
            <div class="modalContent">

                <div class="modalHeader">
                    <button class="close"><a href="../index.html">Close</a></button>
                    <h1>Thanks For Your<span> Feedback</span></h1>
                </div>

                <div class="modalBody">
                    <h2>We Will get back to you in 2-3 business days</h2>
                    <span><img src="../images/email.jpg" alt="email image"></span>
                    <h3>Enjoy your day and get back to us for any more questions</h3>
                </div>



            </div>
        </div>
<?php session_destroy(); ?>
</body>
</html>


