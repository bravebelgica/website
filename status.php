<?php 
$subscriber .= $_REQUEST['email'];
$status .= $_REQUEST['status'];
$text_valid_email = "Bedankt voor de interesse in onze clan. Wij hebben een mail verstuurd naar <strong>" . $subscriber . "</strong> met meer details. <br>Tot heel binnenkort !<br> <br>";
$text_invalid_email = "Bedankt voor de interesse in onze clan. U moet echter een geldig email adres ingeven. Het opgegeven email adres :  <strong>" . $subscriber . "</strong> blijkt niet te voldoen. <br>Probeert u nog eens !<br> <br>";
$text_dberr = "Bedankt voor de interesse in onze clan. Wij ondervinden echter momenteel problemen op ons database systeem. Onze excuses voor het ongemak...probeert u later nog eens !<br> <br>";

$back = "error-back-color";
$bStatus = true;
$bList = false;


if ($status == 'VALID') {
	$text= $text_valid_email;
	$back = "status-back-color";
} else if ($status == 'DBERR') {
	$text= $text_dberr;
} else if ($status == 'LIST') {
	$bStatus = false;
	$bList = true;
	$back = "status-back-color";
	
} else {
	$text= $text_invalid_email;
}

$returnurl = '/index.html?#subscribe-section'; 

$bStatus = true;
$bList = false;


?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
<title>Brave Belgica CoC Clan</title>
<link rel="shortcut icon" href="assets/img/favicon.ico" />
<!--PUT YOUR FAVICON HERE-->
<!--REQUIRED STYLE SHEETS-->
<!--MAIN BOOTSTRAP STYLE-->
<link href="assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" />
<!--FONT AWESOME STYLE -->
<!-- <link href="assets/plugins/font-awesome/font-awesome.min.css"
	rel="stylesheet" />
old integrated -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<!--VEGAS SLIDESHOW STYLE -->
<link href="assets/plugins/vegas/jquery.vegas.min.css" rel="stylesheet" />
<!--COUNTDOWN STYLE -->
<link href="assets/css/countdown.css" rel="stylesheet" />
<!--CUSTOM STYLE -->
<link href="assets/css/style.css" rel="stylesheet" />

<!-- custom fonts  -->
<link href='http://fonts.googleapis.com/css?family=Slackey' rel='stylesheet' type='text/css'>
<!--END REQUIRED STYLE SHEETS-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<br>
	<br>
	<!-- MAIN CONTAINER -->
	<div class="container">
		<!-- END HOME SECION -->
		<!-- FEEDBACK SECION -->
		
		<section id="status-section" class="<?php  if (bStatus == false){ echo "hidden";} ?>" >
		<!--<section id="status-section" class = "hidden">-->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php echo $back; ?>">
					<div class="divider-two"></div>
					<h2 class="center shadow-small">Brave Belgica Clan</h2>
					<div class="divider-two margin-botom-50"></div>
					<!-- ./Headings -->

					<div class="center">
					
						<span> 
						<img	src="assets/img/bb_wapenschild.png"> <img src="assets/img/sirjoske.png"> <img src="assets/img/bb_wapenschild.png">
						</span> 
						<br>
						
					
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0 ">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 center">
					<?php echo $text ?>
					<br>
					
					klik <a href=<?php echo $returnurl ?> >hier</a> om terug naar het hoofdscherm.
					
					<br>
					<br>
					
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0 ">
					</div>
					
					
				</div>
			</div>
			</section>

			

		<section id="list-section" class="<?php  if (bStatus == true){ echo "hidden";} ?>" >
		<!--<section id="status-section" class = "hidden">-->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php echo $back; ?>">
					<div class="divider-two"></div>
					<h2 class="center shadow-small">Brave Belgica Registraties</h2>
					<div class="divider-two margin-botom-50"></div>
					<!-- ./Headings -->

					<div class="center">
					
						<span> 
						<img	src="assets/img/bb_wapenschild.png"> <img src="assets/img/sirjoske.png"> <img src="assets/img/bb_wapenschild.png">
						</span> 
						<br>
						
					
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0 ">
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 center">
					<?php echo $text ?>
					<br>
					
					klik <a href=<?php echo $returnurl ?> >hier</a> om terug naar het hoofdscherm.
					
					<br>
					<br>
					
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0 ">
					</div>
					
					
				</div>
			</div>
			</section>
			
			
			
			
			
			
</div>
	<!-- END MAIN CONTAINER -->
	<!--REQUIRED SCRIPTS FILES-->
	<!--SCRIPTS AT END SO PAGE WILL TAKE LESS TIME TO LOAD-->
	<!--REQUIRED CORE JQUERY SCRIPTS FILE-->
	<script src="assets/plugins/jquery.min.js"></script>
	<!--REQUIRED BOOTSTRAP SCRIPTS FILE-->
	<script src="assets/plugins/bootstrap/bootstrap.js"></script>
	<!--REQUIRED SCRIPT FILES FOR JQUERY COUNTDOWN-->

	<!--REQUIRED SCRIPT FILE FOR VEGAS BACKGROUND SLIDESHOW-->
	<script src="assets/plugins/vegas/jquery.vegas.min.js"></script>
	<!--REQUIRED SCRIPT FOR SCROLLING MENU LINKS-->
	<script src="assets/plugins/jquery.easing.1.3.js"></script>
	<!--REQUIRED CUSTOM SCRIPT FILE-->
	<script src="assets/js/custom-slideshow.js"></script>
	<!--END REQUIRED SCRIPTS FILES-->
</body>

</html>





