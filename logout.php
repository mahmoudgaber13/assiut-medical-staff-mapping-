 <script>
	window.location.href = "http://localhost/new/home.php";
 </script>
 
 
 
 <? 

/*
		session_start();

		
        $db= mysql_connect ("localhost", "root", "root");
		mysql_select_db("project") or die(mysql_error());
		mysql_query("SET NAMES 'utf8'");  
		
	

		// remove all session variables  
		session_unset();   

		// destroy the session   
		session_destroy();  
	 
		header("Location:home.php");  
          
		  
		  
		  
		  
		  session_start();
			session_unset();  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
			header("Location: home.php");
		  
			
			session_destroy();
			header('Location:home.php');
			*/
			
			
			session_start(); # NOTE THE SESSION START
$_SESSION = array(); 
session_unset();
session_destroy();

// echo "Logged Out!";
// Note: Putting echo "Logged Out!" before sending the header could result in a "Headers already sent" warning and won't redirect your page to the login page - pointed out by @Treur - I didn't spot that one.. Thanks...

exit(); # NOTE THE EXIT
		  
		  
?>
