<?php 
session_start();
session_set_cookie_params(0);
	
$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");

	//session_start();
	//require_once 'dbFunction.php';
	//$funObj = new dbFunction();
	
     


	if($_POST['edit'])
	{  
        $username = $_POST['username'];  
        $emailid = $_POST['email'];  
        $oldpassword = $_POST['oldpassword'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];
		$age = $_POST['date'];
		$gndr = $_POST['gender'];
		$visa= $_POST['visa'];
		
		
		
		$old_password_hashed = md5($oldpassword);
		$new_password_hashed = md5($password);
		$confirm_password_hashed = md5($confirmPassword);
		$oldpwd=$_SESSION['pwd'];
		
		 
		if($oldpwd==$old_password_hashed)
		{
			
			$oldemail = $_SESSION['emailid'];
			
			
			if($new_password_hashed == $confirm_password_hashed)
			{ 
			
				//$email = $funObj->isUserExist($emailid);  
				if(!$email)
				{  
					$register = mysql_query("UPDATE users_profile SET p_name = '".$username."' ,p_password ='".$new_password_hashed."',p_birth_day = '".$age."',gender = '".$gndr."',p_email= '".$emailid."',p_visa='".$visa."'");
	  
					if($register)
					{  
						 echo "<script>alert('your information is updated')</script>";  
					}
					else
					{  
						echo "<script>alert('try again please')</script>";  
					}  
				} 
				else 
				{  
					echo "<script>alert('Email Already Exist')</script>";  
				}  
			} 
			else 
			{  
				echo "<script>alert('Password Not Match')</script>";  
			  
			}
			
		}
		else
		{
			echo "<script>alert('your old password not match')</script>"; 
		}
		  
    }

	
?>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>صفحتي الشخصيه</title>
	
				
			<style type="text/css">
			 body { font: normal 10pt Helvetica, Arial; }	
			 #map { border: 2px solid; border-radius: 25px;}
			</style>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoNb2pr6QCJegnk6JbowePMYZ1Zvj_rxo"type="text/javascript"></script>

			 
			
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
                        <a class="page-scroll" href="#hospitals"><h5>الخدمات</h5></a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#about"><h5>بيانات المستخدم</h5></a>
                    </li>
                   

						
					<li class="active">			
						<a href="home.php">الرئيسيه</a>
					</li>
					<li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> صفحتي الشخصيه
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="" ><a href="#" data-toggle="modal" data-target="#edit-profile" style="color:black"><i class="fa fa-cogs" ></i> الاعدادات</a></li>
                            <li><a href="logout.php" style="color:black"><i class="fa fa-power-off" ></i> تسجيل الخروج</a></li>
                        </ul>
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
        <div class="col-md-9 col-sm-12">
                    <div class="panel panel-default profile-panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-3 col-xs-12 text-center" >
                                    <img src="<?=$_SESSION['country']?>" width="200px" height="200px" class="img-circle user-image">
                                </div>
                                <div class="col-sm-9 col-xs-12 user-info-box">
                                    <a class="btn btn-info pull-right btn-edit" href="#" data-toggle="modal" data-target="#edit-profile">
                                        <i class="fa fa-edit"></i>
                                        …تعديل
                                    </a>
                                    <h3 class="user-name"><?=$_SESSION['username']?></h3>
                                    
                                        <div class="row">
											
											<div >
                                                <p><strong style="float:right"><i class="fa fa-name" aria-hidden="true"></i>:الاسم </strong><span style="float:right; margin-right:5px" class="user-dob"><?=$_SESSION['name']?></span></p>
											</div></br>
											<div >
                                                <p><strong style="float:right"><i class="fa fa-envelope" aria-hidden="true"></i>:البريد الإلكتروني </strong><span style="float:right; margin-right:5px" class="user-dob"><?=$_SESSION['email']?></span></p>
											</div></br>
											<div >
                                                <p><strong style="float:right"><i class="fa fa-calendar" aria-hidden="true"></i>:تاريخ الميلاد </strong><span style="float:right; margin-right:5px" class="user-dob"><?=$_SESSION['age']?></span></p>
											</div></br>
                                            <div >
                                                <p><strong style="float:right"><i class="fa fa-user" aria-hidden="true"></i> :الجنس </strong><span style="float:right; margin-right:5px" class="user-course"><?=$_SESSION['gender']?></span></p>
                                            </div></br>
                                            <div >
                                                <p><strong style="float:right"><i class="fa fa-globe" aria-hidden="true"></i> :رقم بطاقة الإئتمان </strong><span style="float:right; margin-right:5px" class="user-course"><?=$_SESSION['visa']?></span></p>
                                            </div>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                   
					
					
					
                </div>
    </section>

    <!-- Result Section -->
    <section id="hospitals" class="content-section text-center">
        <div class="col-md-9 col-sm-12">
                   

                   
					
					<div class="panel panel-default" >
                        <div class="panel-body" style="text-align:right;" >
                            <h3> :اختر الخدمه التي تريد <i class="fa fa-desktop" aria-hidden="true"></i></h3>
                            <hr class="colorgraph">
                            <form  method="post" action="t.html" style="text-align:right;float:right" >
								
								<input type="submit" value="أطباء" name="stole" class="btn btn-default btn-lg" style="margin-right:50px"/>
							</form>
							<form  method="post" action="t1.html" style="text-align:right;float:right">
								
								<input type="submit" value="مستشفيات" name="stole" class="btn btn-default btn-lg"  style="margin-right:50px" />
							</form>
							<form  method="post" action="t2.html" style="text-align:right;float:right">
								
								<input type="submit" value="إسعاف" name="stole" class="btn btn-default btn-lg"  style="margin-right:50px"/>
							</form>
							<form  method="post" action="t3.html" style="text-align:right;float:right">
								
								<input type="submit" value="صيدليات" name="stole" class="btn btn-default btn-lg"  style="margin-right:50px"/>
							</form>
							<form  method="post" action="t4.html" style="text-align:right;float:right">
								
								<input type="submit" value="تكسيات" name="stole" class="btn btn-default btn-lg"  style="margin-right:50px"/>
							</form>
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
    
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoNb2pr6QCJegnk6JbowePMYZ1Zvj_rxo"type="text/javascript"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
