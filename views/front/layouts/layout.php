<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <title>MGArt</title>
    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" type="text/css" href="css/front/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/front/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="css/front/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/front/styles.css" />
  </head>
  <body>

	<?php include_once('views/front/elements/navbar.php'); ?>

	<?php include_once('views/front/' . $view_to_show . ".php"); ?>

	<?php include_once('views/front/elements/footer.php'); ?>


    <!--scripts loaded here -->
    <script src="js/front/jquery.min.js"></script>
    <script src="js/front/bootstrap.min.js"></script>
    <script src="js/front/jquery.easing.min.js"></script>
    <script src="js/front/wow.js"></script>
    <script src="js/front/scripts.js"></script>
  </body>
</html>