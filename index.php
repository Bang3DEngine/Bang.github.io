<?php require_once("doctype-html-begin.php") ?>

<head>
    <?php require_once("head-contents.php") ?>
</head>

<body>
<?php require_once("menu-bar.php") ?>

<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Resources/snake-snapshot-3.png" alt="Image">
        <div class="carousel-caption">
          <h3>Start using Bang now!</h3>
          <p>It's free!</p>
        </div>      
      </div>

      <div class="item">
        <img src="Resources/bang-screenshot-1.png" alt="Image">
        <div class="carousel-caption">
          <h3>Develop awesome games with it!</h3>
          <p>:)</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Games done using Bang</h3><br>
  <div class="bangCenteredRow">
    <div class="bangColumn">
      <img src="Resources/snake-snapshot.png" class="img-responsive" style="object-fit: cover; width:300px; height:200px" alt="Image">
      <p style="text-align:center">Snake3D</p>
    </div>
    <span style="display:inline-block; width:50px;"></span>
    <div class="bangColumn"> 
      <img src="Resources/keyvirus-snapshot.png" class="img-responsive" style="object-fit: cover; width:300px; height:200px" alt="Image">
      <p style="text-align:center">KeyVirus</p>    
    </div>
  </div>
</div><br>

<?php require_once("footer.php") ?>

</body>
</html>

