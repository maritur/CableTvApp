<?php
            $msg = '';
            
            if (isset($_POST['submit']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'mariaturuta@gmail.com' && 
                  $_POST['password'] == 'maria123') {

                  	

                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  
      				header("Location: http://localhost/lucrare%20an/mysql.php");
                    }
               else {
                  $msg = 'Login sau parolă incorectă, mai încercați odată';
               }
            }
         ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>LOGARE</title>
    <link href="style.css" rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <!-- FONT AWESOME ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />   
</head>

<body>
    <div class="nav-bar">
            <ul>
            	<li><a href="index.html" style="font-size:50px;"> <i class="fa fa-home"></i></a></li>
				<li><a href="http://localhost/lucrare%20an/admin.php" style="float:right;font-size:50px;"><i class="fa fa-user"></i></a></li>
            </ul>
    </div>	

  <div style="background:url(img/login.jpg); background-repeat:no-repeat; width:100%; height:700px; margin-top:35px;">
  	<br>
	<div class="loginbox">


		<h2>Log In Here</h2>
		<h4 class="error-msg" ><?php echo $msg; ?></h4>
		<form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
			<label>Email/Username</label>
   			<input type="text"  name="username" placeholder="Your email/user name..">
			<label>Password</label>
   			<input type="password" name="password" placeholder="Your Password.."><br>
			<input type="submit" name="submit" value="Logare">
			<a href="#" align=center> Forgot Password</a>


		</form>
	</div>
  </div>

</body>
</html>


