<?php
$data = unserialize($data);
$menu = new Menu();
$actors = unserialize($menu->getActors());
$linckActor = '';
foreach ($actors as $val){
    $val = unserialize($val);
    $linckActor .= '<li><a class="heder_menu" href="http://'.$_SERVER[HTTP_HOST].'/actors?id='.$val[id].'&#pasha-tak-skazal">'.$val[name].'</a></li>';
}
$films = unserialize($menu->getFilms());
$linckFilms = '';
foreach ($films as $val){
    $val = unserialize($val);
    $linckFilms .= '<li><a href="http://'.$_SERVER[HTTP_HOST].'/films?id='.$val[id].'&#pasha-tak-skazal">'.$val[name].'</a></li>';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php if(empty($data[name])):?>
	<title>The Fast and the Furious</title>
        <?php else:?>
        <title><?= $data[name];?></title>
        <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="template, bootstrap, html5, css3, mobile, responsive" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="/css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<link rel="stylesheet" href="/css/style.css">


	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
        <link type="image/x-icon" rel="shortcut icon" href="/images/favicon.gif" />
	</head>
	<body>

	<div id="fh5co-container">
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row">
							<h1 class="to-animate">Fast and Furious</h1>
							<h2 class="to-animate">Lovely Designed <span>by</span> <a href="#" target="_blank">drosel team</a></h2>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(/images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(/images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid" id="pasha-tak-skazal">
                                <div class="fh5co-menu-1">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Films <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?= $linckFilms;?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fh5co-logo">
                                    <a href="<?= 'http://'.$_SERVER[HTTP_HOST];?>" data-nav-section="home">HOME</a>
                                </div>
                                <div class="fh5co-menu-2">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Actors <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?= $linckActor;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
				
			</div>
		</div>

		<div id="fh5co-featured" data-section="features">
			<div class="container">
				<div class="row">
					<?php include 'application/views/' . $content_view;?>
				</div>

			</div>
		</div>
		
	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">Designed by <a href="#" target="_blank">DROSEL TEAM</a><br>&copy; 2017</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="/js/moment.js"></script>
	<script src="/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="/js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="/js/jquery.flexslider-min.js"></script>
        <script>
                $(function () {
               $('#date').datetimepicker();
           });
        </script>
	<!-- Main JS -->
	<script src="/js/main.js"></script>

	</body>
</html>

