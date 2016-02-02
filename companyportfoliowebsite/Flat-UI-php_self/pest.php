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
$optionsRadios = $_POST["optionsRadios"];
$optionsRadios2 = $_POST["optionsRadios2"];
$noofspecimens = $_POST["noofspecimens"];
$noofindi = $_POST["noofindi"];
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
    <div class="form-group"><span>Here are your details!</span></div>
          <div class="form-group"><span>Pest/Symptom Images</span></div>
        </div>
        </div>
 <div class="row">      
     <div class="col-xs-10 textlable">
          <div class="form-group"><span>If possible, please provide photos of the affected plant(s), A range of photos from landscape-level shots to close-up are ideal. Including photos can aid diagnosis.</span></div>
        </div>
        </div>
<div class="row">
<div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>Did you include images with your submission?</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group"><span><?php echo $optionsRadios; ?>/span></div>
        </div>
        </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>I included pictures as:</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group"><span><?php echo $optionsRadios2; ?>/span></div>
        </div>
        </div>
<div class="row">
    <div class="col-md-4 col-md-offset-3 textlable">
          <div class="form-group"><span>Pest Information</span></div>
        </div>
        </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Number of Specimens in Sample</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $noofspecimens; ?>/span></div>
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Number of individuals Observed</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $noofindi; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Describe the appearance of the pest </span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $desc; ?>/span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-10 textlable">
          <div class="form-group"><span>EXTRA INFORMATION: Use the block of the sheet to include additional information: eg. irrigation type and rate, fertilization type and rate, pesticides, fungicided or herbicides applied, map/schematic of property and location of the affected plants including directional arrows (N,E,S,W), general care/maintenence or sitiation of plants, planting depth or method, progression of symptoms, etc</span></div>
        </div>
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <a href="lab.php" class="btn btn-block btn-lg btn-primary">Thank you! Proceed to Lab details only if you are authorized!</a></div>
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
    <form action="pest.php" method="POST">
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
          <div class="form-group"><span>Pest/Symptom Images</span></div>
        </div>
        </div>
 <div class="row">      
     <div class="col-xs-10 textlable">
          <div class="form-group"><span>If possible, please provide photos of the affected plant(s), A range of photos from landscape-level shots to close-up are ideal. Including photos can aid diagnosis.</span></div>
        </div>
        </div>
<div class="row">
<div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>Did you include images with your submission?</span></div>
        </div>
        <div class="col-xs-3">
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-toggle="radio">
            Yes, I did!
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            No!
          </label>
        </div>
        </div>
    <div class="row">
     <div class="col-xs-3 col-md-offset-1 textlable">
          <div class="form-group"><span>I included pictures as:</span></div>
        </div>
        <div class="col-xs-3">
          <label class="radio">
            <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" data-toggle="radio">
            Printed photos submitted with the sample
          </label>
          <label class="radio">
            <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option1" data-toggle="radio" checked="">
            Digital images emailed to ryan.davis@usu.edu
          </label>
        </div>
        </div>
<div class="row">
    <div class="col-md-4 col-md-offset-3 textlable">
          <div class="form-group"><span>Pest Information</span></div>
        </div>
        </div>
<div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Number of Specimens in Sample</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="noofspecimens" type="text" value="" placeholder="Specimens in number" class="form-control" />
          </div>
        </div>
        <div class="col-xs-1 textlable">
          <div class="form-group"><span>Number of individuals Observed</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <input name="noofindi" type="text" value="" placeholder="Number of individuals" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Describe the appearance of the pest </span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <input name="desc" type="text" value="" placeholder="Specimens in number" class="form-control" />
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-10 textlable">
          <div class="form-group"><span>EXTRA INFORMATION: Use the block of the sheet to include additional information: eg. irrigation type and rate, fertilization type and rate, pesticides, fungicided or herbicides applied, map/schematic of property and location of the affected plants including directional arrows (N,E,S,W), general care/maintenence or sitiation of plants, planting depth or method, progression of symptoms, etc</span></div>
        </div>
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <input name="mySubmit" type="submit" value="Submit!" /></div></div>
    </div>
</div>
    
  </body>
</html>
