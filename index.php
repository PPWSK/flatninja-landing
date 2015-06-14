<?php
    if ($_POST["submit"]) {
        $motiv = $_POST['motiv'];
        $uremail = $_POST['uremail'];

        $from = 'Join FlatNinja site';
        $to = 'vadimpopowsky@gmail.com';
        $subject = 'Message from ' . $uremail;

        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: ". $uremail . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $body = $uremail . " is interested to join FlatNinja: " . $motiv;


        // Check if email has been entered and is valid
        if (!$_POST['uremail'] || !filter_var($_POST['uremail'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['motiv']) {
            $errMessage = 'Please enter your motivation';
        }

  // If there are no errors, send the email
  if (!$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $headers)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Join FlatNinja</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="stylesheets/style.css">


  <!-- SMOOTH SCROLL -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>
  <!-- End of SMOOTH SCROLL -->
  <!-- ScrolLReveal -->
  <script src="scripts/vendor/scrollreveal.js"></script>
  <!-- End of ScrolLReveal -->

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>

  <div id="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">

          <div>
             <video id="awesome_video" src="https://d2mbntyfvvb037.cloudfront.net/static/video_home/video_7.mp4" autoplay loop="loop"/>
          </div>

          <div class="put-over text-center">
            <img src="./images/logo.png" class="fadeIn">
            <div class="fadeInAndSlideUp banner-font-size">
              <h1 class="font-effect-outline">FLATNINJA</h1>
              <p>Join our team to revolutionize the way people find the best rooms<br>...with the best roommates !</p><br>
              <p><a href="#subscribe" class="btn btn-primary btn-lg smoothscroll" role="button">JOIN THE TEAM</a></p>
              <p class="fa fa-angle-down pulse"></p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="blue-bg padded-two">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6" data-sr="move 16px scale up 20%, over 2s">
          <div class="card marginal">
            <img src="./images/learn.svg" width="100px" height="100px">
            <h2>Get experience</h2>
            <p class="text-justify">You'll get a steep learning curve with in-house <strong>android</strong> and <strong> back-end development</strong>. Our webservices are already set up and you'll be able to learn about OAuth, Validation, REST, SQL-injection, MySQL, Json-parsing, Android mobile development, GitHub,... </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6" data-sr="move 16px scale up 20%, over 2s">
          <div class="card marginal">
            <img src="./images/rocket2.svg" width="100px" height="100px">

            <h2>Get up and running</h2>
            <p class="text-justify">We are already pitching for seed-money to <strong>business angels</strong>, we've gone through the entire business modeling with the Founder Institute bootcamp, etc... it has been critized and evaluated by a lot of people, and we still believe the project is a valid one!</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6" data-sr="move 16px scale up 20%, over 2s">
          <div class="card marginal">
            <img src="./images/money3.svg" width="100px" height="100px">

            <h2>Grab the opportunity</h2>
            <p class="text-justify">Our thorough market analysis has shown a potential targetable market of <strong>at least 500 million EUR</strong> and targets hundreds of millions of people worldwide every year</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6" data-sr="move 16px scale up 20%, over 2s">
          <div class="card marginal">
            <img src="./images/handss.png" width="100px" height="100px">
            <h2>Don't go short on your investment</h2>
            <p class="text-justify">This is not a short-lived project, we will <strong>invite you to join the team</strong> permanently if our leWagon cooperation goes well!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center padded-eight blurred" id="subscribe" name="subscribe">
    <h2 class="put-over">Start working on FlatNinja</h2>
    <p class="put-over">Leave us your email and join the team</p>
    <form class="form-inline put-over" role="form" action="index.php#subscribe" method="post">
      <input name="motiv" type="text" placeholder="one line motivation" class="form-control">
      <input name="uremail" type="email" placeholder="xxxxx@xxxxx.com" class="form-control">
      <input id="submit" type="submit" name="submit" value="Send" class="btn btn-primary">
      <br>
      <?php echo "<p class='text-danger'>$errMessage</p>";?>
      <?php echo "<p class='text-danger'>$errEmail</p>";?>
      <?php echo $result; ?>
    </form>

  </div>

  <div class="dark-bg padded-eight">
    <div class="container text-center">
      <div class="row">
        <div class="col-xs-12">
          <h2 id="white-effect">What the project should look like</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3">
          <div class="card">
            <img src="./images/screen.png" class="img-responsive">
          </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
          <div class="card">
            <img src="./images/webmockup.png" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="map" style="width: 100%; height: 400px;"></div>

  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-4">
          <ul class="list-inline">
            <li><a href="https://www.facebook.com/flatninja"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/flat_ninja"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="col-xs-8 text-right">
          All Rights Reserved @FlatNinja 2015
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <script type="text/javascript">
  var myLatlng = new google.maps.LatLng(50.847518, 4.359247);

  var myOptions = {
    zoom: 16,
    center: myLatlng,
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]}] // TODO: replace [] by array from https://snazzymaps.com/
  };

  var map = new google.maps.Map(document.getElementById('map'), myOptions);
  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title: "You are here!"
  });
  </script>

  <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script>
    window.sr = new scrollReveal();
  </script>

</body>
</html>
