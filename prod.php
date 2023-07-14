<?php
	include "config.php";

    $query 	= "SELECT * FROM portfolio_asafZafrir
    WHERE id = " . $_GET["id"].";";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("DB query failed.");
    }

    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asaf Zafrir</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <script src="./js/addition.js"></script>
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="./index.php" rel="tooltip">Asaf Zafrir</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.php#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.php#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.php#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.php#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="./index.php#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-2.jpg')"></div>
      <div class="container">
      <div class="h4 mt-0 title" style="margin-top: 50px;"> <?php echo $row["name"]; ?> </div>
      <div class="content-center"><img src=" <?php echo $row["image_url"]; ?> "></div>
    </div>
    </div>
</div>

<div class="section" id="about">
<div class="card" data-aos="fade-up" data-aos-offset="10">
<div class="row">
  <div class="col-lg-6 col-md-12">
    <div class="card-body">
      <div class="h4 mt-0 title">About</div>
      <p> <?php echo $row["description"]; ?> </p>
    </div>
  </div>
  <div class="col-lg-6 col-md-12">
    <div class="card-body">
      <div class="h4 mt-0 title">Basic Information</div>
      <div class="row">
        <div class="col-sm-4"><strong class="text-uppercase">Date:</strong></div>
        <div class="col-sm-8"> <?php echo $row["date"]; ?> </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4"><strong class="text-uppercase">Tech:</strong></div>
        <div class="col-sm-8"> <?php echo $row["prog_lang1"] . ", " . $row["prog_lang2"]; ?> </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4"><strong class="text-uppercase">Site:</strong></div>
        <div class="col-sm-8"><a href="<?php echo $row["address_url"]; ?>" target="_blank"> <?php echo $row["address_url"]; ?> </a></div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4"><strong class="text-uppercase">Github:</strong></div>
        <div class="col-sm-8"><a href="<?php echo $row["github_url"]; ?>" target="_blank"> <?php echo $row["github_url"]; ?> </a></div>
      </div>
    </div>
</div>
</div>
      </div>
    </div>
  </div>
</div>
</div></div>
<!-- <div class="content-center">
    <h5>Links</h5>
<div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.facebook.com/asaf.zafrir" target="_blank" rel="tooltip" title="Web"><i class="fa fa-website"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="https://github.com/asafzaf" target="_blank" rel="tooltip" title="Github Page"><i class="fa fa-github"></i></a></div>
        </div>
    </div> -->
    </div>
    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="https://www.facebook.com/asaf.zafrir" target="_blank"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-github btn btn-link " href="https://github.com/asafzaf" target="_blank"><i class="fa fa-github fa-2x " aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="https://www.instagram.com/asaf_z/" target="_blank"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">Asaf Zafrir</div>
      <div class="text-center text-muted">
        <p>&copy; Asaf Zafrir. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
        <p><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank">תואר ראשון בהנדסת תוכנה בשנקר</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>