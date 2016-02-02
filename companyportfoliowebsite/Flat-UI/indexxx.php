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
  <?php
$name = $_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
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
            <h5>Verify your Contact details please!</h5>
          </div>
    
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Name</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
           <div class="form-group"><span><?php echo $name; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-2 textlable">
          <div class="form-group"><span>Address</span></div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <div class="form-group"><span><?php echo $address; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>City</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $city; ?></span></div>
          </div>
        </div>
        <div class="col-xs-1">
          <div class="form-group">
            <span>State</span>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $state; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
     <div class="col-xs-1 textlable">
          <div class="form-group"><span>Zip</span></div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $zip; ?></span></div>
          </div>
        </div>
        <div class="col-xs-1">
          <div class="form-group">
            <span>Country</span>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <div class="form-group"><span><?php echo $country; ?></span></div>
          </div>
        </div>
    </div>
    <div class="row">
    <div class=" col-md-4 col-md-offset-2">
    <a href="contact.html" class="btn btn-block btn-lg btn-primary">Proceed to Contact Information</a></div>
    </div>





    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>
