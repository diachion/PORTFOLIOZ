<?php
$pageName = "kuroko";
include ("header.php");
include ("navigation.php");
?>


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            JUMBOTRON
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="jumbotron main-jumbo">
  <div class="container">
    <h1 class="text-center">the best present</h1>
    <h3 class="text-center">happy birthday, kuroko tetsuya!</h3>
  </div>  <!-- container-->
</div> <!-- jumbotron -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            CONTENT
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<div class="container">
	<div class="col-md-12 text-center">
    <img class="work-main" src="imgs/works/kuroko/bday2016.gif" alt="work 1"/>
  </div> <!-- column -->
</div> <!-- container-->


<!-- -=-=-=-=- CAROUSEL -=-=-=-=- -->
<div class="container">
  <div class="col-md-12 text-center">
  <div id="kuroko-carousel" class="carousel slide work-carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imgs/works/kuroko/progress-o1.jpg" alt="progress"/>
        <div class="carousel-caption">
          Used the pen tool for the basic outlines
        </div>
      </div>

      <div class="item">
        <img src="imgs/works/kuroko/progress-o2.jpg" alt="progress"/>
        <div class="carousel-caption">
          Start coloring in base colors, shadows, and highlights
        </div>
      </div>

      <div class="item">
        <img src="imgs/works/kuroko/progress-o3.jpg" alt="progress"/>
        <div class="carousel-caption">
          Final result of the frame
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#kuroko-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#kuroko-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>  <!-- container-->
<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->


<!-- -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
            FOOTER
-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- -->
<?php
include ("footer.php");
?>

