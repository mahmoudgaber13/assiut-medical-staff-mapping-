<!DOCTYPE html>


<?php

$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
?>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>الاطباء</title>
	
	
			
				
			<style type="text/css">
			 body { font: normal 10pt Helvetica, Arial; }	
			 #map { border: 2px solid; border-radius: 25px;}
			</style>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoNb2pr6QCJegnk6JbowePMYZ1Zvj_rxo"type="text/javascript"></script>

			 <script type="text/javascript">
			 //Sample code written by August Li
			 var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/red.png",
			 new google.maps.Size(32, 32), new google.maps.Point(0, 0),
			 new google.maps.Point(16, 32));
			 var center = null;
			 var map = null;
			 var currentPopup;
			 var bounds = new google.maps.LatLngBounds();
			 function addMarker(lat, lng, info) {
			 var pt = new google.maps.LatLng(lat, lng);
			 bounds.extend(pt);
			 var marker = new google.maps.Marker({
			 position: pt,
			 icon: icon,
			 map: map
			 });
			 var popup = new google.maps.InfoWindow({
			 content: info,
			 maxWidth: 900
			 });
			 google.maps.event.addListener(marker, "click", function() {
			 if (currentPopup != null) {
			 currentPopup.close();
			 currentPopup = null;
			 }
			 popup.open(map, marker);
			 currentPopup = popup;
			 });
			 google.maps.event.addListener(popup, "closeclick", function() {
			 map.panTo(center);
			 currentPopup = null;
			 });
			 }
			 function initMap() {
			 map = new google.maps.Map(document.getElementById("map"), {
				zoom:15,
			 center: new google.maps.LatLng(27.178312,31.185926),

			 mapTypeId: google.maps.MapTypeId.ROADMAP,
			 mapTypeControl: false,
			 mapTypeControlOptions: {
			 style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
			 },
			 navigationControl: true,
			 navigationControlOptions: {
			 style: google.maps.NavigationControlStyle.SMALL
			 }
			 });
			 			 
			 <?php
			 mysql_query("SET NAMES 'utf8'");
			 $doctorMajor=$_POST['majorValue'];
		  	 $doctorDegree=$_POST['degreeValue'];
			 $doctorStreet=$_POST['streetName'];
	   		 $doctorPrice=$_POST['priceValue'];
			 $doctorRate=$_POST['rateValue'];
			 //$q=mysql_query("select * from doctors where name1 like '%$doctorName%'",$dbcnx);
							switch ($doctorPrice)
								{
									case 1 : 
										$max=100;
										$min=0;
									break;
																	
									case 2 : 
										$max=200;
										$min=100;
									break;
									
									case 3 : 
										$max=300;
										$min=200;
									break;
												
									case 4 : 
										$max=400;
										$min=300;
									break;
												
									case 5 : 
										$max=10000;
										$min=400;
									break;
								}
											
											
								if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
											
								else if (isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									} 
											
								else if(isset($doctorMajor) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND price < $max  AND price > $min ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min 	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet)  & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet)  & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor)  & isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree' ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet' 	",$db);
											
									}
											
								else if(isset($doctorMajor) &  isset($doctorPrice))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%'
														AND price < $max  AND price > $min ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND clinic like '$doctorStreet'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if( isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice) )	
									{
										$q=mysql_query("select * from doctors where clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where  price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if (isset($doctorDegree))
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree' ",$db);
									}
											
								else if (isset($doctorMajor))
									{
										$q=mysql_query("select * from doctors where  major like '%$doctorMajor%' ",$db);
									}
											
								else if (isset($doctorPrice))
									{
										$q=mysql_query("select * from doctors where  price < $max  AND price > $min  ",$db);
									}
											
								else if (isset($doctorRate))
									{
										$q=mysql_query("select * from doctors where  rate  '$doctorRate' ",$db);
									}
											
								else if (isset($doctorStreet))
									{
										$q=mysql_query("select * from doctors where clinic like '%$doctorStreet%' ",$db);
									}
											
								else if (!isset($doctorMajor) & !isset($doctorStreet) & !isset($doctorPrice) & !isset($doctorRate) & !isset($doctorDegree))
									{
										$q=mysql_query("select * from doctors ",$db);
												
									}
											
								
										
									

			 
				
			while ($row = mysql_fetch_array($q)){
			$name=$row['name1'];
			$lat=$row['lat'];
			$lon=$row['lang'];
			$address=$row['clinic']; 
			$phone=$row['phone'];
			 echo ("addMarker($lat, $lon,'<b>الاسم:$name</b><br/>العنوان:$address</b><br/>الهاتف:$phone');\n");
			 }


			 ?>

			 //center = bounds.getCenter();
			 //map.fitBounds(bounds);

			 }
			 </script>
			
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.min.js"></script>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/bootstrap.css" rel="stylesheet">
				
			
		
	
	
	
	
	
	
	
	

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscalez.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body  onLoad="initMap()" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Top</span> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#about"><h5>من نحن</h5></a>
                    </li>-->
					
					
					 <li>
                        <a class="page-scroll" href="#contact"><h5>اتصل بنا</h5></a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="#doctors"><h5>الاطباء</h5></a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#about"><h5>الخريطه</h5></a>
                    </li>
                   

						
					<li class="active">			
						<a href="home.html">الرئيسيه</a>
					</li>
						
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Doctorna</h1>
                        <p class="intro-text">A free, responsive,web site for searching medical services.<br>Created 3MS.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Map Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
		<div  id="map" class="col-md-12" style="height: 600px; border: 2px;">
			 
		</div>
	
	</div>
    </section>

    <!-- Result Section -->
    <section id="doctors" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
					<?php			
							//$db=mysql_connect("localhost","root","root");
							//mysql_Select_db("project",$db);
							mysql_query("SET NAMES 'utf8'");
										
							$doctorMajor=$_POST['majorValue'];
							$doctorDegree=$_POST['degreeValue'];
							$doctorStreet=$_POST['streetName'];
							$doctorPrice=$_POST['priceValue'];
							$doctorRate=$_POST['rateValue'];
							
										
							switch ($doctorPrice)
								{
									case 1 : 
										$max=100;
										$min=0;
									break;
																	
									case 2 : 
										$max=200;
										$min=100;
									break;
									
									case 3 : 
										$max=300;
										$min=200;
									break;
												
									case 4 : 
										$max=400;
										$min=300;
									break;
												
									case 5 : 
										$max=10000;
										$min=400;
									break;
								}
											
											
								if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
											
								else if (isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									} 
											
								else if(isset($doctorMajor) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND clinic like '$doctorStreet'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND price < $max  AND price > $min ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min 	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet)  & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet)  & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor)  & isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where clinic like '$doctorStreet'
														AND price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if(isset($doctorMajor)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND degree like '$doctorDegree' ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND clinic like '$doctorStreet' 	",$db);
											
									}
											
								else if(isset($doctorMajor) &  isset($doctorPrice))	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%'
														AND price < $max  AND price > $min ",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where major like '%$doctorMajor%' 
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet)  & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND clinic like '$doctorStreet'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if( isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where degree like '$doctorDegree'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorStreet) & isset($doctorPrice) )	
									{
										$q=mysql_query("select * from doctors where clinic like '$doctorStreet'
														AND price < $max  AND price > $min	",$db);
											
									}
											
								else if(isset($doctorMajor) & isset($doctorStreet) & isset($doctorPrice) & isset($doctorRate) & isset($doctorDegree))	
									{
										$q=mysql_query("select * from doctors where  clinic like '$doctorStreet'
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if( isset($doctorPrice) & isset($doctorRate) )	
									{
										$q=mysql_query("select * from doctors where  price < $max  AND price > $min
														AND rate = '$doctorRate'	",$db);
											
									}
											
								else if (isset($doctorDegree))
									{
										$q=mysql_query("select * from doctors where  degree like '$doctorDegree' ",$db);
									}
											
								else if (isset($doctorMajor))
									{
										$q=mysql_query("select * from doctors where  major like '%$doctorMajor%' ",$db);
									}
											
								else if (isset($doctorPrice))
									{
										$q=mysql_query("select * from doctors where  price < $max  AND price > $min  ",$db);
									}
											
								else if (isset($doctorRate))
									{
										$q=mysql_query("select * from doctors where  rate  '$doctorRate' ",$db);
									}
								
									
										else if (!isset($doctorMajor) & !isset($doctorStreet) & !isset($doctorPrice) & !isset($doctorRate) & !isset($doctorDegree))
									{
										$q=mysql_query("select * from doctors ",$db);			
									}
									
									
								else if (isset($doctorStreet))
									{
										$q=mysql_query("select * from doctors where clinic like '%$doctorStreet%' ",$db);
									}
											
								
											
								if(mysql_num_rows($q)>0)
									{
										?>
											<table class="table  table-bordered" >
												<tr align="center">
													
													<th> سعر الكشف
													</th>
													<th>الهاتف
													</th>
													<th>العياده
													</th>
													<th>الدرجه العلميه
													</th>
													<th>التخصص
													</th>
													<th>الاسم
													</th>
													
												</tr>
										<?php
										
											while($res=mysql_fetch_array($q))
												{
												print"
													<tr >
													
													<td>$res[6]
													</td>
													<td>0$res[5]
													</td>
													<td>$res[4]
													</td>
													<td>$res[3]
													</td>
													<td>$res[2]
													</td>
													<td>$res[1]
													</td>
													
													 </tr>
													
													 
											  ";}
										}
										else {print"<p align='center'>لا توجد نتائج للبحث يرجى التأكد من مدخلات البحث</p>";}
										?>

									</table >
					
					
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>اتصل بنا</h2>
                <p> !لا تشعر بالحرج لمراسلتنا ودعمنا بملاحظاتك على موقعنا,واعطائنا مقترحاتك لاضافة خدمه جديده ,او لتقول مرحباً</p>
                <p><a href="https://www.facebook.com/">feedback@Doctorna.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/?hl=en" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 3MS</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
