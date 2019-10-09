<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>لوحة التحكم</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

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
					
					<li>
						<a href="" data-toggle="modal" data-target="#login-modal">تسجيل الدخول</a>
					</li>
						
					<li>
						<a href="registration.php">مستخدم جديد</a>
					</li>
                    
                    
					<li>
                        <a class="page-scroll" href="#add-pharmacy"><h5>اضافة صيدليات</h5></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#add-ambulances"><h5>اضافة اسعاف</h5></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#add-hospitals"><h5>اضافة مستشفيات</h5></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#add-doctors"><h5>اضافة اطباء</h5></a>
                    </li>
					<li >
						<a href="اسعاف اسيوط.html">اسعاف اسيوط</a>
					</li>
					<li>
						<a href="صيدليات اسيوط.html">صيدليات اسيوط</a>
					</li>
						
					<li >
						<a href="مستشفيات اسيوط.html">مستشفيات اسيوط</a>
					</li>
						
					<li class="active">			
						<a href="الرئيسيه.html">الرئيسيه</a>
					</li>
						
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	 <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" style="text-align:right">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">تسجيل الدخول</h4>
                    </div>
					
					
					
                    <div class="modal-body" >
                        <form action="" method="post">
                            <div class="form-group" style="text-align:right">
                                <input type="text" class="form-control" name="emailid" id="email_modal" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group" style="text-align:right">
                                <input type="password" class="form-control" name="password" id="password_modal" placeholder="كلمة المرور">
                            </div>
                            <p class="text-center">
                                <input type="submit" value="تسجيل الدخول"  class=" btn btn-template-main " name="login"/>
                            </p>
                        </form>
                        <p class="text-center text-muted">لم تسجل بعد؟</p>
                        <p class="text-center text-muted"><a href="registration.php"><strong>سجل الآن</strong></a> من السهل التسجيل لا تستغرق سوي دقائق!&nbsp;!تمنحك التمتع بكل الخدمات </p>
                    </div>
					
					
					
                </div>
            </div>
    </div>
	
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

    <!-- About Section -->
    <section id="add-doctors" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2" >
               
				<form class="form-horizontal" role="form" method="post" action="">
					<div class="form-group">
					<label class="control-label col-sm-2" for="name" style="float:right"> : اسم الطبيب </label>
					<div class="col-sm-10">
					
						<input  type="text" class="form-control" name="name" required>
					  </div>
					  
					  
					</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="major" style="float:right">: التخصص</label>

					 <div class="col-sm-10">
						<input type="text" class="form-control" name="major" >
					  </div>
						   
					</div>
					
					<div class="form-group">
						  <label class="control-label col-sm-2" for="degree" style="float:right">: الدرجه العلميه </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					  </div>

					  
					</div>
					
					
					<div class="form-group">
					<label class="control-label col-sm-2" for="date" style="float:right">: عنوان العياده </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					 </div>
					  
					  
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2" for="date" style="float:right">: رقم الهاتف </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					 </div>
					  
					  
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2" for="date" style="float:right">: سعر الكشف </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					 </div>
					  
					  
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2" for="date" style="float:right">: latitude </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					 </div>
					  
					  
					</div>
					
					<div class="form-group">
					<label class="control-label col-sm-2" for="date" style="float:right">: langitude </label>
					<div class="col-sm-10">
						<input  type="text" class="form-control" name="degree" required>
					 </div>
					  
					  
					</div>
					
					<div class="form-group">
					  <div>
					  
						<input type="submit" class="btn btn-default btn-lg" value="اضافه" style="float:left"/>

					  </div>
					</div>
				</form>   
			</div>
			
        </div>
    </section>

    <!-- Download Section -->
    <section id="add-hospitals" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
				
					<form class="form-horizontal" role="form" method="post" action="">
						<div class="form-group">
						<label class="control-label col-sm-2" for="name" style="float:right"> : اسم المستشفى </label>
						<div class="col-sm-10">
						
							<input  type="text" class="form-control" name="name" required>
						  </div>
						  
						  
						</div>
						<div class="form-group">
						<label class="control-label col-sm-2" for="major" style="float:right">:عنوان المستشفى</label>

						 <div class="col-sm-10">
							<input type="text" class="form-control" name="major" required>
						  </div>
							   
						</div>
						
						<div class="form-group">
							  <label class="control-label col-sm-2" for="degree" style="float:right">: التخصص </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						  </div>

						  
						</div>
						
						
						
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: رقم الهاتف </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: latitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: langitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						  <div>
						  
							<input type="submit" class="btn btn-default btn-lg" value="اضافه" style="float:left"/>

						  </div>
						</div>
					</form>
				
					
					
					
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="add-ambulances" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form class="form-horizontal" role="form" method="post" action="">
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: عنوان الاسعاف </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: latitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: langitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						  <div>
						  
							<input type="submit" class="btn btn-default btn-lg" value="اضافه" style="float:left"/>

						  </div>
						</div>
					</form>
            </div>
        </div>
    </section>
	
	
	<!-- Contact Section -->
    <section id="add-pharmacy" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form class="form-horizontal" role="form" method="post" action="">
						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="float:right"> : اسم الصيدليه </label>
							<div class="col-sm-10">
								<input  type="text" class="form-control" name="name" required>
							</div>
							  
							  
						</div>
				
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: عنوان الصيدليه </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: رقم الهاتف </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: latitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="date" style="float:right">: langitude </label>
						<div class="col-sm-10">
							<input  type="text" class="form-control" name="degree" required>
						 </div>
						  
						  
						</div>
						
						<div class="form-group">
						  <div>
						  
							<input type="submit" class="btn btn-default btn-lg" value="اضافه" style="float:left"/>

						  </div>
						</div>
					</form>
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
