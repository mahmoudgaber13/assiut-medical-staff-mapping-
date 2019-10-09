<?php

$db= mysql_connect ("localhost", "root", "root");
mysql_select_db("project") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");

	//session_start();
	//require_once 'dbFunction.php';
	//$funObj = new dbFunction();
	session_set_cookie_params(0);
	session_start();
     


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
  


  

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>صفحتي الشخصيه</title>
        <link href="img/favicon.ico" rel="shortcut icon"/>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-select.min.css">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/user-profile.css">
			<link href="css/grayscalez.css" rel="stylesheet">
			
        <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body background="black">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <hr class="colorgraph colorgraph-header">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                   
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> صفحتي الشخصيه
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="#" data-toggle="modal" data-target="#edit-profile"><i class="fa fa-cogs"></i> الاعدادات</a></li>
                            <li><a href="logout.php"><i class="fa fa-power-off" ></i> تسجيل الخروج</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        </nav>

        <div class="container">
            <div class="row">
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

                    <div class="panel panel-default">
                        <div class="panel-body" style="text-align:right">
                            <h3 > حدد موقعك <i class="fa fa-desktop" aria-hidden="true"></i></h3>
                            <hr class="colorgraph">
                             <form  method="post" action="" style="text-align:center">
								
								<input type="button"  onclick="getLocation()" value="موقعي" name="stole" class="btn btn-danger" />
								<p id="demo" style= "width:330px;height:200px">
								
								</p>
								
							</form>
                        </div>
                    </div>
					
					<div class="panel panel-default">
                        <div class="panel-body" style="text-align:right">
                            <h3> :اختر الخدمه التي تريد <i class="fa fa-desktop" aria-hidden="true"></i></h3>
                            <hr class="colorgraph">
                            <form  method="post" action="t.html" style="text-align:right;float:right" >
								
								<input type="submit" value="أطباء" name="stole" class="btn btn-danger" style="margin-right:50px"/>
							</form>
							<form  method="post" action="t1.html" style="text-align:right;float:right">
								
								<input type="submit" value="مستشفيات" name="stole" class="btn btn-danger"  style="margin-right:50px" />
							</form>
							<form  method="post" action="t2.html" style="text-align:right;float:right">
								
								<input type="submit" value="إسعاف" name="stole" class="btn btn-danger"  style="margin-right:50px"/>
							</form>
							<form  method="post" action="t3.html" style="text-align:right;float:right">
								
								<input type="submit" value="صيدليات" name="stole" class="btn btn-danger"  style="margin-right:50px"/>
							</form>
							<form  method="post" action="t4.html" style="text-align:right;float:right">
								
								<input type="submit" value="تكسيات" name="stole" class="btn btn-danger"  style="margin-right:50px"/>
							</form>
                        </div>
                    </div>
					
                </div>
                
                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        <!-- Panel 2 -->
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            
                        </div>

                        <!-- Panel 2 -->
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="edit-profile-label" aria-hidden="true" style="text-align:right">
            <div class="modal-dialog" >
                <div class="modal-content" style="text-align:right">
                    <form class="form-horizontal" action="" method="post" role="form" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="edit-profile">تعديل صفحتي الشخصيه</h4>
                        </div>
                        <div class="modal-body" style="text-align:right">
                            <div class="form-group" >
                                <label class="col-sm-2 control-label" for="user-name" >اسم المستخدم</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user-name" name="username" placeholder="الاسم بالكامل" required style="float:left"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user-dept">البريد الإلكتروني</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="البريد الإلكتروني" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user-year">كلمة المرور</label>
                                <div class="col-sm-10">
                                     <input type="password" class="form-control" id="old-Password" name="oldpassword" placeholder="كلمة المرور القديمه"  required/><br/>
                                    <input type="password" class="form-control" id="Password" name="password" placeholder="كلمة المرور الجديده" required/><br/>
                                    <input type="password" class="form-control" id="Password" name="confirm_password" placeholder="اعد كتابة كلمة المرور" required/><br/>
                                </div>
                            </div>
							
							<!---------------------------------------->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user-dept">تاريخ الميلاد</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="date" name="date" placeholder="date of birth" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user-dept">الجنس</label>
                                <div class="col-sm-10">
                                    <select name="gender">
                                        <option value="Male">ذكر</option>
                                        <option value="Female">أنثي</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="user-dept">رقم بطاقة الإئتمان</label>
                                <div class="col-sm-10">
                                   <input type="text" value="visa" name="visa"></input>
                                </div>
                            </div>
							
							<!---------------------------------------->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                            <input type="submit" value="حفظ التغييرات" name="edit" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>

            </div>
        </div>


        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/user-profile.js"></script>

		
		
	
    </body>
</html>