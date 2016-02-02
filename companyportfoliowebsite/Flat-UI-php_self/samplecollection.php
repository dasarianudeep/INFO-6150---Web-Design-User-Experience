<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI - Free Bootstrap Framework and Theme</title>
    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <?php if (!empty($_POST)): ?>
  <?php
$hostName = $_POST["hostName"];
$plantName = $_POST["plantName"];
$desc = $_POST["desc"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$country = $_POST["country"];
?>
    <div class="container">
    <div class="row"> <img src="images/head.png" alt="Smiley face" ></div>
    <div class="row"> 
    
    <div class="pagination">
            <ul>
              <li class="active"><a href="/indexxx.html">Personal Information</a></li>
              <li><a href="contact.html">Contact Information</a></li>
              <li><a href="samplecollection.html">Sample Collections</a></li>
              <li><a href="plantinfo.html">Plant Info</a></li>
              <li><a href="pest.html">Pest Information</a></li>
              <li><a href="lab.html">Lab Use</a></li>
            </ul>
          </div>
    
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
     <div class="form-group"><span>Collection Information</span></div>
     </div>
    </div>
        <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Host Plant Common Name</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $hostName; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Host Plant Scientific Name/Variety</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $plantName; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>If not collected from a plant, then please Describe</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $desc; ?></span></div>
          </div>
        </div>
    </div>
 
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <a href="plantinfo.php" class="btn btn-block btn-lg btn-primary">Proceed to Plant Information</a></div>
    </div>






    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
    
       <?php else: ?>
       
       <div class="container">
    <form action="samplecollection.php" method="POST">
    <div class="row"> <img src="images/head.png" alt="Smiley face" ></div>
    <div class="row"> 
    
    <div class="pagination">
            <ul>
              <li class="active"><a href="/indexxx.html">Personal Information</a></li>
              <li><a href="contact.html">Contact Information</a></li>
              <li><a href="samplecollection.html">Sample Collections</a></li>
              <li><a href="plantinfo.html">Plant Info</a></li>
              <li><a href="pest.html">Pest Information</a></li>
              <li><a href="lab.html">Lab Use</a></li>
            </ul>
          </div>
    
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <div class="form-group"><span>Here are your details!</span></div>
     <div class="form-group"><span>Collection Information</span></div>
     </div>
    </div>
        <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Host Plant Common Name</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input type="text" name="hostName" value="" placeholder="Host Plant Common Name" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Host Plant Scientific Name/Variety</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input type="text" name="plantName" value="" placeholder="Plant Name" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>If not collected from a plant, then please Describe</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input type="text" name="desc" value="" placeholder="describe" class="form-control" height="5" width="10"/>
          </div>
        </div>
    </div>
 
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <input name="mySubmit" type="submit" value="Submit!" /></div>
    </div>
    </form>
    <?php endif; ?>
  </body>
</html>
