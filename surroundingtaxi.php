<!DOCTYPE html>

<?php

$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");

$xxx=$_GET['width'];
$yyy=$_GET['height'];


$i=1;
$q=mysql_query("delete from sur_taxi",$db)or die(mysql_error());
while($i<=40)
{
	
	$q=mysql_query("select t_lat,t_lang from taxi_center where t_id= $i",$db)or die(mysql_error());
	$res=mysql_fetch_array($q);
	$x=$res['t_lat'];
	$y=$res['t_lang'];
	

	$dist=sqrt( (($xxx-$x)*($xxx-$x)) + (($yyy-$y)*($yyy-$y)) );
	
	
	$qq=mysql_query("Insert into sur_taxi values($i , $dist)",$db)or die(mysql_error());
	
	$i=$i+1;
}





?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>اقرب تكسيات</title>

	<style type="text/css">
			 body { font: normal 10pt Helvetica, Arial; }
			  #map { border: 2px solid; border-radius: 25px;}
			</style>
			
			<script>
			function getLocation() {
			
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);	
			} else { 
					x.innerHTML = "Geolocation is not supported by this browser.";
				}
			}

			function showPosition(position) {
				var xlat = position.coords.latitude ;
				var xlon = position.coords.longitude;
				
				
			}
			</script>
			
			
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
			 animation:google.maps.Animation.BOUNCE,
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
				 getLocation();
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
			
			
			 $q=mysql_query("select * from sur_taxi,taxi_center where sur_taxi.id=taxi_center.t_id order by dist limit 5",$db);
			 mysql_query("SET NAMES 'utf8'");
			 //$query = mysql_query("select * from doctors where price <100");
			 while ($row = mysql_fetch_array($q))
			 {
			 $name=$row['t_name'];
			 $lat=$row['t_lat'];
			 $lon=$row['t_lang'];
			 $desc=$row['t_level'];
			 $phone=$row['t_phone'];
			 echo ("addMarker($lat, $lon,'<b>العنوان:$name</b><br/>المستوى:$desc<br/>الهاتف:$phone');\n");
			 $aslat=27.186521;
			 $aslong=31.168616;
			 echo ("addMarker($aslat, $aslong,'<b>انا هنا</b>');\n");
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

<body onLoad="initMap()" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

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
						<a class="page-scroll" href="#download">بيانات التكسيات</a>
					</li>
					<li >
						<a  class="page-scroll" href="#about">أقرب مركز تكسيات</a>
					</li>
					<li >			
						<a href="home.html">الرئيسيه</a>
					</li>
					<li>
						<a href="logout.php" ><i class="fa fa-power-off" ></i> تسجيل الخروج</a>
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

    <!-- map Section--> 
    <section id="about" class="container content-section text-center">
        <div class="row">
				<div  id="map" class="col-md-12" style="height: 600px; border: 2px;">
		
				</div>
			
			
        </div>
							
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="row">
						
						<?php
		
		
		
		$q=mysql_query("select * from sur_taxi,taxi_center where sur_taxi.id=taxi_center.t_id order by dist limit 5",$db);
		if(mysql_num_rows($q)>0)
		{
		?>
		<table class="table table-bordered" >
		<tr align="center" >
			<th style="text-align:center">الهاتف
			</th>
			<th style="text-align:center">المستوى
			</th>
			<th style="text-align:center">الاسم
			</th>
		</tr>
		<?php
		
		 while($res=mysql_fetch_array($q))
			 {
		print"<tr >
			<td>0$res[t_phone]
			</td>
			<td>$res[t_level]
			</td>
			<td>$res[t_name]
			</td>
			 </tr>";}
		}
		else {print"<p align='center'>لا توجد نتائج للبحث يرجى اعاده البحث بالاسم الصحيح</p>";}
		?>
	 
	</table >
						
						
					</div>
						
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnnU9-qBQvv3CHzWMuel4p3JR4rZArCfw&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	
	
	
</body>

</html>
