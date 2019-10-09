<?php

$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");

if($_POST['register'])
{
	$name=$_POST['username'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirm_password'];
	$email=$_POST['emailid'];
	$date_of_birth=$_POST['date'];
	$gender=$_POST['gender'];
	$visa=$_POST['visa'];
	$ph="img/".$name.$_FILES['file']['name'];
	
	$pw=md5($password);
	$hash_pw=md5($confirmpassword);
	
	
	$q=mysql_query("select * from users_profile where p_email='".$email."'",$db) or die(mysql_error());
	$row = mysql_num_rows($q);  
	if($row > 0)
	{
		echo "<script>alert('عذرا هذا البريد الالكترونى مستخدم من قبل')</script>";
	}
	
	else if($pw==$hash_pw)
	{
		$q=mysql_query("INSERT INTO users_profile (p_name,p_password,p_birth_day,p_gender,p_photo,p_email,p_visa) values ('".$name."','".$password."','".$date_of_birth."','".$gender."','".$ph."','".$email."','".$visa."')",$db) or die(mysql_error());
		move_uploaded_file($_FILES['file']['tmp_name'],$ph);
		if($q)
		{
			echo "<script>alert('تم التسجيل ')</script>";
			
		}
		else
		{
			echo "<script>alert('عذرا بيانات غير صحيحه يرجى التاكد من صحة البيانات و المحاوله مره اخرى')</script>";
		}
	}
	else
	{
		echo "<script>alert('عذرا بيانات غير صحيحه يرجى التاكد من صحة البيانات و المحاوله مره اخرى')</script>";
	}

}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>مستخدم جديد</title>

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

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
                   <!-- <li>
                        <a class="page-scroll" href="#about"><h5>من نحن</h5></a>
                    </li>-->
                    
                    <li>
                        <a class="page-scroll" href="#contact"><h5>اتصل بنا</h5></a>
                    </li>
					
						
					<li >			
						<a href="home.php">الرئيسيه</a>
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

    <!-- About Section
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>من نحن</h2>
                <p><h3>خدمة مجانية تتيح للمرضى حجز مواعيد لزيارة الطبيب من خلال الانترنت ويهدف الموقع إلى مساعدة المرضى في البحث عن أطباء من مختلف التخصصات، والمقارنة بينهم من خلال قراءة بياناتهم المهنية و التعرف على خبراتهم، مما يسهل عملية الحجز في الموعد المناسب لهم. كما أن الموقع  يتيح الفرصة للأطباء للوصول إلى أكبر شريحة من المرضى ومساعدتهم في تنظيم عملية حجز المواعيد ليتمكنوا من تقديم رعاية أفضل لهم.
 ..نتمني أن تحوز خدماتنا علي رضاكم و تجدونها مفيدة لكم</h3></p>
                <!--<p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            
			</div>
			
        </div>
    </section> -->

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                
					</br>
					
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12" style="text-align:right">
							<form action="" method="post" enctype="multipart/form-data">
							
							
                                <div class="form-group">
                                    <label for="name-login">الاسم</label>
                                    <input type="text" class="form-control" required="required"  id="name-login" name="username"/>
                                </div>
								
                                <div class="form-group">
                                    <label for="email-login">البريد الالكتروني</label>
                                    <input type="text" class="form-control" required="required"  id="email-login" name="emailid"/>
                                </div>
								
                                <div class="form-group">
                                    <label for="password-login">كلمة المرور</label>
                                    <input type="password" class="form-control" required="required"  id="password-login" name="password"/>
                                </div>
								
								<div class="form-group">
                                    <label for="confirm-login">تأكيد كلمة المرور</label>
                                    <input type="password" class="form-control" required="required"  id="confirm-login" name="confirm_password"/>
                                </div>
								
								<div class="form-group">
                                    <label for="age">تاريخ الميلاد</label>
                                    <input type="date" class="form-control" required="required"  id="date" name="date"/>
                                </div>
								
								<div class="form-group">
                                    <label for="gender">الجنس</label>
									
                                    <select id="gender" name="gender" class="form-control" >
                                        <option  value="ذكر">ذكر</option>
                                        <option  value="أنثى">أنثي</option>
                                    </select>
									
                                </div>
								
								<div class="form-group" >
                                    <label for="visa" >رقم بطاقة الائتمان</label>
									<input class="form-control" type="text" name="visa"></input>
                                    
                                </div>
                                
								<div class="form-group">
                                    <label for="uploaded_file">الصوره</label>
                                    <input type="file" id="uploaded_file" name="file" style="float:right"/>
                                </div>
								
								
								<div class="text-center">
									<!--<input type="submit" name="register" value="Register"/>-->
                                    <input type="submit" value="تسجيل"  class=" btn btn-default btn-lg " name="register"/>
                                    <!--<button type="submit" class="btn btn-template-main" name="register"><i class="fa fa-user-md"></i> Register</button>-->
                                </div>
                            </form>
					</div>
					</div>
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
    <div id="map"></div>

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
