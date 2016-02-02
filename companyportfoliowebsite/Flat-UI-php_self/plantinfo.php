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
$plantAge = $_POST["plantAge"];
$size = $_POST["size"];
$noofplants = $_POST["noofplants"];
$percent = $_POST["percent"];
$optionsRadios = $_POST["optionsRadios"];
$desc = $_POST["desc"];
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
    <div class="col-md-4 col-md-offset-3 textlable">
          <div class="form-group"><span>Plant Information</span></div>
        </div>
        </div>
 <div class="row">      
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Plant age</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $plantAge; ?>/span></div>
          </div>
        </div>
        <div class="col-xs-1">
          <div class="form-group">
            <span>Size</span>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $size; ?>/span></div>
          </div>
        </div>
        </div>
     <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Number of Plants affected</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $noofplants; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Percent of Plants Affected</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $percent; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>Problem Worsening</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group"><span><?php echo $optionsRadios; ?>/span></div>
        </div>
        </div>
        <div class="row">
     <div class="col-xs-12 textlable">
          <div class="form-group"><span>PLANT SYMPTOM(S) DESCRIPTION: Describe in detail what is wrong with the plant and what parts are affected</span></div>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-10">
          <div class="form-group">
            <div class="form-group"><span><?php echo $desc; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <a href="pest.php" class="btn btn-block btn-lg btn-primary">Proceed to Pest Collection</a></div>
    </div>

</div>




    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
    
    <?php else: ?>
    
     <div class="container">
    <form action="plantinfo.php" method="POST">
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
    <div class="col-md-4 col-md-offset-3 textlable">
    <div class="form-group"><span>Here are your details!</span></div>
          <div class="form-group"><span>Plant Information</span></div>
        </div>
        </div>
 <div class="row">      
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Plant age</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="plantAge" type="text" value="" placeholder="Plant age" class="form-control" />
          </div>
        </div>
        <div class="col-xs-1">
          <div class="form-group">
            <span>Size</span>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="size" type="text" value="" placeholder="Size" class="form-control" />
          </div>
        </div>
        </div>
     <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Number of Plants affected</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input name="noofplants" type="text" value="" placeholder="Specify a Number" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Percent of Plants Affected</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input name="percent" type="text" value="" placeholder="Specify Percentage" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>Problem Worsening</span></div>
        </div>
        <div class="col-xs-3">
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
            Yes, it is Worsening!
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            No, not yet!
          </label>
        </div>
        </div>
        <div class="row">
     <div class="col-xs-12 textlable">
          <div class="form-group"><span>PLANT SYMPTOM(S) DESCRIPTION: Describe in detail what is wrong with the plant and what parts are affected</span></div>
        </div>
    </div>
    <div class="row">
    <div class="col-xs-10">
          <div class="form-group">
            <input name="desc" type="text" value="" placeholder="Describe" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <input name="mySubmit" type="submit" value="Submit!" /></div></div>
    </div>
</form>
</div>

<?php endif; ?>
  </body>
</html>
