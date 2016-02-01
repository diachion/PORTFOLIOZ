<?php
$pageName = "index";
include ("header.php");
?>

<?php
$bg = ["imgs/nightskyo1.jpg", "imgs/nightskyo2.jpg", "imgs/nightskyo4.jpg", "imgs/nightskyo5.jpg", 
        "imgs/nightskyo6.jpg", "imgs/dayskyo1.jpg"];

$random = (rand(0, count($bg)-1));

?>

<header>
  <div id="splash" style="background-image: url('<?php echo $bg[$random]; ?>');"></div>

  <div id="motto">
    <p id="mottoText">let your imagination reach the sky. for the sky's the limit.</p>
  </div>

  <div id="soonDiv">
    <a class="down-arrow" data-toggle="tooltip" title="scroll down" href="#nav">
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
<div class="jumbotron main-jumbo" style="margin-top: 150px;">
  <div class="container">
    <h1 class="text-center">from imagination to reality</h1>
    <h3 class="text-center">front end web developer and designer</h3>
  </div>  <!-- container-->
</div> <!-- jumbotron -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            CAROUSEL
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<div class="container">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="..." alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      <div class="item">
        <img src="..." alt="...">
        <div class="carousel-caption">
          ...
        </div>
      </div>
      ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  <!-- container-->

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>hello world.

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            FOOTER
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<?php include ("footer.php"); ?>

<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            JAVASCRIPT AND JQUERY
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="global.js"></script>

</body>
</html>