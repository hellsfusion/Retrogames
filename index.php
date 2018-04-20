<?php
require_once("php/model.php");
$obj=new games();
$game=$obj->show_games();
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RetroGames</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free steam games for free" />
	<meta name="keywords" content="steam, steam game, free, free steam games, free games, games, sale" />
	<meta name="author" content="Hellsfusion" />
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="fh5co-top-logo">
                    <div id="fh5co-logo"><a href="index.html">.:Retro_Games</a></div>
                </div>
                <div class="fh5co-top-menu menu-1 text-center">
                    <ul>
                        <li><a href="work.html">boton 1</a></li>
                        <li><a href="about.html">boton 2</a></li>
                        <li><a href="contact.html">boton 3</a></li>
                    </ul>
                </div>
                <div class="fh5co-top-social menu-1 text-right">
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
	
        <div id="fh5co-work">
            <div class="container">
                
                <div class="row top-line animate-box">
                    <div class="col-md-5"></div>
                    <div class="col-md-7 text-left intro">
                        <h2>.:Retro_Games<span class="fh5co-highlight">Hecho con <i class="icon-heart2"></i> pa <a>ti</a> </span></h2>
                        
                    </div>
                </div>
                                                                     
                <div class="row">
                    <?php
                    $num=0;
                    foreach ($game as $g) {
                    $num++;
                    echo"
                    <div class='col-md-4 text-center animate-box'>
                    
                        <a class='work' target='_blank' href='https://$g->url/'>
                            <div class='work-grid' style='background: #828282;'>
                                <div class='inner'>
                                <img class='img resize' src='images/uploads/$g->name.jpg'>
                                    <div class='desc'>
                                    <h3>$g->name</h3>
                                    <span class='cat'>$g->platform</span>
                                    </div>
                                    </img>
                                </div>  
                            </div>
                        </a>
                    </div>
                    
                    ";
                        }
                    ?>

                    
                </div>
                
            </div> 
        </div>

        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2018 .:Retro_Games All Rights Reserved.</small> 
                            <small class="block">Designed by <a>Hellsfusion</a></small>
                        </p>

                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
        
    <script></script>

	</body>
</html>

