<?php
$pageName = "index dark-theme";
include ("header.php");
?>

<?php
$bg = ["imgs/nightskyo1.jpg", "imgs/nightskyo2.jpg", "imgs/nightskyo6.jpg", "imgs/dayskyo1.jpg"];

$random = (rand(0, count($bg)-1));

?>

<header>
  <div id="splash" style="background-image: url('<?php echo $bg[$random]; ?>');"></div>

  <div id="motto">
    <p id="mottoText">let your imagination reach the sky. for the sky's the limit.</p>
  </div>

  <div id="soonDiv">
    <a class="down-arrow smooth-scroll" data-toggle="tooltip" title="scroll down" href="#nav">
      <span class="fa fa-arrow-down"></span>
    </a>
  </div>
</header>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            NAVIGATION BAR
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<?php include ("navigation.php"); ?>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            JUMBOTRON
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="jumbotron main-jumbo">
  <div class="container">
    <h1 class="text-center">from imagination to reality</h1>
    <h3 class="text-center">front end web developer and designer</h3>
  </div>  <!-- container-->
</div> <!-- jumbotron -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            Imagine it. Plan it. Create it.
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="container">
  <h1 class="text-center" style="margin-bottom: 70px;">Imagine it. Plan it. Create it.</h1>

  <div class="col-sm-4 text-center">
    <img class="webapps" src="imgs/icons/laptop.svg" alt="Websites / Apps">
    <h2 class="text-center">Websites / Apps</h2>
  </div> <!-- column -->

  <div class="col-sm-4 text-center">
    <img class="uiux" src="imgs/icons/browser.svg" alt="UI / UX Design">
    <h2 class="text-center">UI / UX Design</h2>
  </div> <!-- column -->

  <div class="col-sm-4 text-center">
    <img class="designs" src="imgs/icons/pencil.svg" alt="Graphic Designs">
    <h2 class="text-center">Graphic Designs</h2>
  </div> <!-- column -->

</div>  <!-- container-->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            CAROUSEL
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<div class="container">
  <div id="best-works-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">

        <div class="container">
          <div class="col-md-6">
            <img class="carousel-image" src="imgs/thumbnails/CAROUSEL-rcmp.jpg" alt="BCIP with MetaOptima and RCMP">
          </div>

          <div class="col-md-6">
            <h1>RCMP | METAOPTIMA</h1>
            <p class="padding-bot">A webpage for a Build in Canada Innovation Program (BCIP) project with MetaOptima and the Royal Canadian Mounted Police (RCMP), serving to get the RCMP to participate in the project</p>
            <p><a class="btn-carousel btn-link-out text-center" href="rcmp.php">View Project</a></p>
            
          </div>
        </div> <!-- container -->

      </div> <!-- item -->


      <div class="item">

        <div class="container">
          <div class="col-md-6">
            <img class="carousel-image" src="imgs/thumbnails/CAROUSEL-de.jpg" alt="DermEngine">
          </div>

          <div class="col-md-6">
            <h1>DERMENGINE HOMEPAGE</h1>
            <p class="padding-bot">Are you a doctor? Do you have a MoleScope? Do your patients have a MoleScope? Yes? Then it's time to get DermEngine to easily communicate with your patients!</p>
            <p><a class="btn-carousel btn-link-out text-center" href="dermengine.php">View Project</a></p>
          </div>
        </div> <!-- container -->

      </div> <!-- item -->


      <div class="item">

        <div class="container">
          <div class="col-md-6">
            <img class="carousel-image" src="imgs/thumbnails/CAROUSEL-tandem.jpg" alt="Tandem Accounting Group Ltd.">
          </div>

          <div class="col-md-6">
            <h1>TANDEM ACCOUNTING GROUP LTD.</h1>
            <p class="padding-bot">A WordPress website built for Tandem Accounting Group Ltd. along with rebranding designs and concepts for their business cards and email signatures.</p>
            <p><a class="btn-carousel btn-link-out text-center" href="tandem.php">View Project</a></p>
          </div>
        </div> <!-- container -->

      </div> <!-- item -->

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#best-works-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#best-works-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  <!-- container-->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            What are you waiting for?
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="container">
  <h1 class="text-center" style="margin-bottom: 70px;">So, what are you waiting for?</h1>

  <div class="col-xs-6 text-center">
    <a href="works.php">
      <img src="imgs/icons/folder.svg" alt="My Works">
      <h2 class="text-center">My Works</h2>
    </a>
  </div> <!-- column -->

  <div class="col-xs-6 text-center">
    <a href="contact.php">
      <img src="imgs/icons/letter.svg" alt="Contact Me">
      <h2 class="text-center">Contact Me</h2>
    </a>
  </div> <!-- column -->

</div>  <!-- container-->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            FOOTER
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<?php include ("footer.php"); ?>

