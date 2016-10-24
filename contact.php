<?php
$pageName = "contact dark-theme";
include ("header.php");
include ("navigation.php");
?>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            JUMBOTRON
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="jumbotron main-jumbo">
  <div class="container">
    <h1 class="text-center">contact</h1>
    <h3 class="text-center">scream into the night sky. i'll be listening</h3>
  </div>  <!-- container-->
</div> <!-- jumbotron -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            MAIN CONTENT
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="container">
	<div class="col-md-5 text-center">
    <h4><span class="fa fa-envelope"></span> Email: </h4> <p class="padding-bot"> lydiaquon@gmail.com </p>
    <h4><span class="fa fa-map-marker"></span> Location: </h4> <p class="padding-bot"> California Bay Area </p>
  </div>

  <div class="col-md-7 text-center blurb-dark">
    <p> Want to contact me? Please leave a message using the nifty form below! Thanks! </p>

    <form id="form" parsley-validate method="post" action="formsubmit.php">
      <div class="form-wrap">
        <label class="line" for="name">Name<span class="required-star">*</span></label>
        <input id="name" class="input-text" type="text" name="name" placeholder="ex. lydia quon" required/>
      </div>

      <div class="form-wrap">
        <label class="line" for="email">Email Address<span class="required-star">*</span></label>
        <input id="email" class="input-text" type="email" name="email" data-parsley-trigger="change" placeholder="ex. lydiaquon@gmail.com" required/>
      </div>
  
      <div class="form-wrap">
        <label class="line" for="subject">Subject<span class="required-star">*</span></label>
        <input id="subject" class="input-text" type="text" name="subject" placeholder="ex. job opportunity" required/>
      </div>

      <div class="form-wrap">
        <label class="line"  for="message">Message<span class="required-star">*</span></label>
        <textarea id="message" rows="5" name="message" class="line" placeholder="ex. are you currently looking for a job opening?" required></textarea>
      </div>
      
      <button id="submit" class="btn btn-submit" type="submit"><span class='submit-txt'>Send Message</span><span class='process-txt'>Processing...</span></button>
    </form>

  </div>

</div>  <!-- container-->

<div style="margin-top: 100px"></div>

<div class="container">
  <div class="col-md-12 text-center social-media">
    <a href="https://ca.linkedin.com/in/lydia-quon-0a979a112" target="new"><span class="fa fa-linkedin-square"></span></a>
    <a href="https://github.com/diachion" target="new"><span class="fa fa-github-square"></span></a>
    
  </div>
</div>  <!-- container-->

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            FOOTER
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<?php
include ("footer.php");
?>