<?php

session_start();

$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");


if($_POST['login'])
{
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$q=mysql_query("select * from users_profile where p_email = '".$email."' AND p_password = '".$password."'",$db)or die(mysql_error());
	if(mysql_num_rows($q)==1)
	{
			while ($row = mysql_fetch_array($q))
			{
				$_SESSION['name']=$row['p_name'];
				$_SESSION['age']=$row['p_birth_day'];
				$_SESSION['gender']=$row['p_gender'];
				$_SESSION['country']=$row['p_photo'];
				$_SESSION['visa']=$row['p_visa'];
				$_SESSION['email']=$row['p_email'];
				header('Location:user-profile.php');
			}
	}
	else
	{
		echo "<script>alert('مستخدم او رمز مرور غير صحيح')</script>";
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

    <title>الرئيسيه</title>

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
					
					<li>
						<a href="" data-toggle="modal" data-target="#login-modal">تسجيل الدخول</a>
					</li>
						
					<li>
						<a href="registration.php">مستخدم جديد</a>
					</li>
					
                   
                    <li>
                        <a class="page-scroll" href="#contact"><h5>اتصل بنا</h5></a>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="#search"><h5> خدماتنا</h5></a>
                    </li>
						
					 <li>
                        <a class="page-scroll" href="#about"><h5>من نحن</h5></a>
                    </li>
					
					<li class="active">			
						<a href="home.html" >الرئيسيه</a>
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
                        <form action="new.php" method="post">
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
                        <p class="intro-text">A free, responsive,web site for searching medical services.<br>Created by 3MS.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>من نحن</h2>
                <p><h3>خدمة مجانية تتيح للمرضى حجز مواعيد لزيارة الطبيب من خلال الانترنت ويهدف الموقع إلى مساعدة المرضى في البحث عن أطباء من مختلف التخصصات، والمقارنة بينهم من خلال قراءة بياناتهم المهنية و التعرف على خبراتهم، مما يسهل عملية الحجز في الموعد المناسب لهم. كما أن الموقع  يتيح الفرصة للأطباء للوصول إلى أكبر شريحة من المرضى ومساعدتهم في تنظيم عملية حجز المواعيد ليتمكنوا من تقديم رعاية أفضل لهم.
 ..نتمني أن تحوز خدماتنا علي رضاكم و تجدونها مفيدة لكم</h3></p>
 
						<a href="#search" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                <!--<p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            -->
			</div>
			
        </div>
    </section>

    <!-- Download Section -->
    <section id="search" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                
				
					<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<p ><h3 style="float:right"> -:ابحث بالاسم  </h3></p>
						</div>
					</div>
					</div>
				
							
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-6">
						</div>
					
						<div class="col-md-6">
							<form class="navbar-form navbar-left" role="search" action="search.php" method="POST">
							
							<div class="form-group"  >
								
								<button type="submit" class="btn btn-default btn-lg" &nbsp">
								بحث
							</button>
								<input type="text" name="searchByName"  class="form-control">
								
							
							</div>
							</form>
						</div>
					   </div>
					</div>
					
					
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					</br>
					
					<form action="advancedsearch.php" method="post">
					<p ><h3 style="float:right;"> -:"بحث متقدم:"يمكنك البحث باختيار واحد</h3></p>
					</br>
					</br>
					</br>
					</br>
					</br>
				   	<div class="col-md-4">
						
						<select name="majorValue" class="form-control" id="sel1">
						
																<option disabled selected>التخصص</option>
																<option value="اطفال" > اطفال </option>
																<option value="امراض القلب" > امراض القلب </option>
																<option value="باطنه" > باطنه </option>
																<option value="انف واذن" >انف واذن</option>
																<option value="عيون" > عيون </option>
																<option value="جلديه" > جلديه </option>
																<option value="مسالك" > مسالك </option>
																<option value="جراحه" > جراحه </option>
																<option value="نساء" > امراض النساء </option>
																<option value="عظام" > عظام </option>
																
						</select>
					</div>
					
					
					<div class="col-md-4">
					
					<select name="degreeValue" class="form-control" id="sel1">
																<option disabled selected>الدرجه العلميه</option>
																<option value="استاذ"> استاذ </option>
																<option value="استاذ مساعد"> استاذ مساعد </option>
																<option value="مدرس"> مدرس </option>
																<option value="اخصائى"> اخصائى </option>
																<option value="استشارى"> استشارى </option>
																
																
															</select>
					
					
					</div>
					
					<div class="col-md-4">
					
						<select name="streetName" class="form-control" id="sel1">
																<option disabled selected>المنطقه</option>
																<option value="شارع رياض"> شارع رياض </option>
																<option value="شارع يسرى راغب"> شارع يسرى راغب </option>
																<option value="شارع 26 يوليو"> شارع 26 يوليو </option>
																<option value="شارع 23 يوليو"> شارع 23 يوليو </option>
																<option value="شارع المحطه"> شارع المحطه </option>
																<option value="شارع المحافظه"> شارع المحافظه </option>
																<option value="شارع محمد توفيق خشبه"> شارع محمد توفيق خشبه </option>
																<option value="شارع ثابت"> شارع ثابت </option>
																<option value="شارع النميس"> شارع النميس </option>
																<option value="شارع الجيش"> شارع الجيش </option>
																<option value="شركة قلته"> شركة قلته </option>
																<option value="شركة فريال"> شركة فريال </option>
																<option value="شيكوريل"> شيكوريل </option>
																<option value="شارع محمد فريد"> شارع محمد فريد </option>
																<option value="شارع محمد على مكارم"> شارع محمد على مكارم </option>
																<option value="شارع الجمهوريه"> شارع الجمهوريه </option>
																<option value="شارع ستى"> شارع ستى </option>
																<option value="شارع رشيدى"> شارع رشيدى </option>
																<option value="شارع جوده الاسدى"> شارع جوده الاسدى </option>
																<option value="شارع دار المعلمين"> شارع دار المعلمين </option>
																<option value="شارع الهلالى"> شارع الهلالى </option>
																<option value="شارع المطرانيه"> شارع المطرانيه </option>
																<option value="شارع الجلاء"> شارع الجلاء </option>
																<option value="شارع المجذوب"> شارع المجذوب </option>
																<option value="شارع السادات"> شارع السادات </option>
																<option value="شارع ابوبكر الصديق"> شارع ابوبكر الصديق </option>
																<option value="شارع سعد زغلول"> شارع سعد زغلول </option>
																
																
															</select>
					
					</div>
					</br>
					</br>
					</br>
					</br>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4" >
							
							
							</div>
							<div class="col-md-4" >
							<select name="priceValue" class="form-control" id="sel1">
																		<option disabled selected>سعر الكشف</option>
																		<option value="1"> اقل من 100 </option>
																		<option value="2"> 100:200 </option>
																		<option value="3"> 200:300 </option>
																		<option value="4"> 300:400 </option>
																		<option value="5"> اعلى من 400 </option>
																		
																		
																	</select>
							
							</div>
							<div class="col-md-4">
							</div>
						</div> 
					</div>

						</br></br></br>
						</br>
							</br>
					<div class="row">
						<div class="col-md-4">
							
						</div>
						<div class="col-md-4">
								

							<button type="submit" class="btn btn-default btn-lg">ابحث</button	>
						</div>
						<div class="col-md-4">
							
						</div>
				    </div>
					</form>
					<hr class="colorgraph">
					
					</br>
					</br>
					<div class="col-md-12" >
							<div class="row">
										<div style="align:right">
											<p ><h3   style="float:right;" >:بحث باسم المستشفي </h3></p>
											</br>
											</br>
											
										<form action="searchHospitals.php" method="post">
											<input type="text" name="searchByHospitalsName" style="padding:17px;"  class="form-control" >
											</br>
											<div class="row">
												<div class="col-md-4">
													
												</div>
												<div class="col-md-4">
														

													<button type="submit" class="btn btn-default btn-lg">ابحث</button	>
												</div>
												<div class="col-md-4">
													
												</div>
											</div>
										</div>
										</br>
					</br>
										</form>
							</div>
								
					</div>
					
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
							<form action ="advancedHospitalSearch.php" method="post">
								<p ><h3   style="float:right;"> :البحث عن مستشفي باسم الشارع </h3></p>
								</br></br>
								
								
								<div style="align:right" >
								
									<select name="hospitalstreet" class="form-control" id="sel1" >
										<option value=""> </option>
										<option value=""> الكل</option>
										<option value="ش 23 يوليو" > ش 23 يوليو </option>
										<option value="ش رياض" > ش رياض </option>
										<option value="ش طراد النيل بالحمراء" > ش طراد النيل بالحمراء </option>
										<option value="ش الجلاء" >ش الجلاء</option>
										<option value="ش الخلفاء" > ش الخلفاء </option>
										<option value="ش المحطه" > ش المحطه </option>
										<option value="ش الشاميه" > ش الشاميه </option>
										<option value="الوليديه" > الوليديه </option>
										<option value="شارع الهلالى" > ش الهلالى </option>
										<option value="ش الجيش" > ش الجيش </option>
										<option value="ش الفتح" > ش الفتح </option>								
										<option value="ش النميس" > ش النميس </option>
										<option value="ش الحاكمدار" >ش الحاكمدار </option>
										<option value="ش الجيش" > ش ثابت </option>
												
									</select>
							
								</div>
							
								</br>
								<div class="row">
									<div class="col-md-4">
										
									</div>
									<div class="col-md-4">
											

										<button type="submit" class="btn btn-default btn-lg">ابحث</button	>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								</br>
							</div>
						</div>
					</div>
					</form>
					
					<hr width="730">
		
					
					<div class="col-md-12">
						<div class="row"></br>
					
							<div class="col-md-12">
							<form action ="pharmacysearch.php" method="post">
								<p ><h3   style="float:right;"> :البحث عن صيدليه </h3></p>
								</br></br>
								
								<div style="align:right" >
								
								<select name="pharmacyStreet" class="form-control" id="sel1" >
								<option value=""> </option>
								<option value="">الكل</option>
								<option value="شارع يسرى راغب" >شارع يسرى راغب </option>
								<option value="شارع الامام على" > شارع الامام على </option>
								<option value="منطقة الفتح" > منطقة الفتح </option>
								<option value="شارع محمد فريد" >شارع محمد فريد</option>
								<option value="شارع المحافظة" > شارع المحافظة </option>
								<option value="شارع 23 يوليو" > شارع 23 يوليو </option>
								<option value="شارع محمد على مكارم" > شارع محمد على مكارم </option>
								<option value="شارع الحاكمدار" > شارع الحاكمدار </option>
								<option value="منطقة الوليدية" > منطقة الوليدية </option>
								<option value="شارع النصر" > شارع النصر </option>
								<option value="منطقة فريال" > منطقة فريال </option>								
								<option value="شارع النميس " > شارع النميس </option>
								<option value="شارع التحرير" >شارع التحرير </option>
								<option value="شارع الجيش" >شارع الجيش </option>
								<option value="شارع 26 يوليو" >شارع 26 يوليو </option>
								<option value="شارع الجمهورية" >شارع الجمهورية </option>
								<option value="شارع الجلاء" >شارع الجلاء </option>
								<option value="شارع الهلالى" >شارع الهلالى </option>
								<option value="شارع الجلاء" >شارع الجلاء </option>			
							</select>
							
								</div>
							
								</br>
								<div class="row">
									<div class="col-md-4">
										
									</div>
									<div class="col-md-4">
											

										<button type="submit" class="btn btn-default btn-lg">ابحث</button	>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								</br>
							</div>
						</div>
					</div>
					</form>
				
				
					<hr width="730">					
					
					<div class="col-md-12">
						<div class="row">
						
							<div class="col-md-12">
							<form action ="ambulancesearch.php" method="post"></br>
					</br>
					
								<p ><h3   style="float:right;"> :البحث عن اسعاف </h3></p>
								</br></br>
								
								<div style="align:right" >
								
									<select name="ampAddress" class="form-control" id="sel1"   >
										<option value=""> </option>
										<option value="جامعه اسيوط" > جامعه اسيوط </option>
										<option value="شارع القصر العينى" >شارع القصر العينى </option>
										<option value="شارع 23 يوليو" > شارع 23 يوليو </option>
										<option value="شارع سعد زغلول" > شارع سعد زغلول </option>
										<option value="شارع مدينه مبارك" > شارع مدينه مبارك </option>
										<option value="شارع المجذوب" > شارع المجذوب </option>
										<option value="شارع جسر السلطان" > شارع جسر السلطان </option>
										<option value="شارع مديريه الزراعه" > شارع مديريه الزراعه</option>
										<option value="شارع المامون" > شارع المامون </option>
										<option value="شارع الجلاء" > شارع الجلاء</option>								
										<option value="احمد على الابه" > احمد على الابه </option>
										<option value="شارع بلال ابن رباح" >شارع بلال ابن رباح </option>
										<option value="طريق  البيسرى" > طريق  البيسرى </option>
										<option value="شارع ثابت" >شارع ثابت</option>
										<option value="شارع النميس" >شارع النميس</option>
										
										
																	
																		
									</select>
									
								</div>
							
								</br>
								<div class="row">
									<div class="col-md-4">
										
									</div>
									<div class="col-md-4">
											

										<button type="submit" class="btn btn-default btn-lg">ابحث</button	>
									</div>
									<div class="col-md-4">
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
					</form>
					
                </div>
            </div>
			<a href="#contact" class="btn btn-circle page-scroll">
               <i class="fa fa-angle-double-down animated"></i>
            </a>
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
