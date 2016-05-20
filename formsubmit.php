<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent = "From: " . $name . " (" . $email . ") " . "\n" . "Message: " . $message;
  $recipient = "lydiaquon@gmail.com";
  // $mailheader = "From: " . $email . "\r\n";
  mail($recipient, $subject, $formcontent) or die("Error!");
  // echo "Thank You!";
?>

<?php
$pageName = "formsubmit dark-theme";
include ("header.php");
include ("navigation.php");
?>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            JUMBOTRON
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="jumbotron main-jumbo">
  <div class="container">
    <h1 class="text-center">Thank you for your message!</h1>
    <h3 class="text-center">I will get back to you as soon as possible!</h3>
  </div>  <!-- container-->
</div> <!-- jumbotron -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            FOOTER
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<?php
include ("footer.php");
?>