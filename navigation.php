<div class="nav-wrapper">
<nav id="nav" class="navbar navbar-inverse 
              <?php 
                if($pageName !== 'index'){
                  echo 'navbar-fixed-top';
                }
              ?>">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">LYDIA QUON</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="about.php">About</a></li>
          <li><a href="works.php">Works</a></li>
          <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>  <!-- container-->
</nav>
</div>