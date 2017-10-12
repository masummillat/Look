<!DOCTYPE html>
<html>
<head>
	<title>Login or Sign Up</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		
	  <!-- Bootstrap -->
  	<link href="css/bootstrap.min.css" rel="stylesheet">

  		
</head>
<body>
    
    <?php include 'header.php';?>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style="background-color:#ffffff;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px; background:white;" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form  data-toggle="validator"  id="loginform" class="form-horizontal" role="form" method="post" action="Login.php" name="Loginform">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="Uemail" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>                                   
                                        <div class="help-block with-errors"></div>
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  id="login-password" type="password" class="form-control" name="Upassword" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type ="submit" name="LogIn" id="btn-login" href="#" class="btn btn-success" value="Login">
                                      

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>   

                            <?
                                if (!empty($_POST['LogIn'])) {
                                    $email = $_POST['Uemail'];
                                     $pass = $_POST['Upassword'];
                                     include 'connection.php';
                                     $query = "select Email,Pass from Fuser where Email = '$email'";
                                     $result = mysql_query($query);
                                     if (!$result) {
                                         echo "query error is ".mysql_error();
                                     }
                                     
                                     while ($data = mysql_fetch_assoc($result)) {
                                         $sqlPass = $data["Pass"];
                                         echo "database pass ".$sqlPass."<br>";

                                     }
                                     $pass = password_hash($_POST['Upassword'],PASSWORD_DEFAULT);
                                     echo "input pass ".$pass."<br>";


                                     if ($pass==$sqlPass) {
                                         echo "password match";
                                     }else
                                     echo "pass doesn't match";

                                     }
                                 
                            ?>  



                        </div>                     
                    </div>  
        </div>

        <!-- - - - - - - - Signup box- - -  - -->
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign Up</div>
                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                </div>
                <div class="panel-body" style="background:white;">
                    <form id="signupform" class="form-horizontal" role="form" data-toggle="validator" action="Login.php" method="post" name="Signupform">
                        
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="inputEmail" class="col-md-3 control-label">Email</label>
                            <div class="col-md-9">
                                <input  name="email" type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Opps, that email address is invalid" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input name="FirstName" type="text" class="form-control" name="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input name="LastName" type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input name="Password" type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                <span class="help-block">Minimum of 6 characters</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <input name ="SignUp" id="btn-signup" type="submit" class="btn btn-info" value="SingUp">
                                <span style="margin-left:8px;">or</span>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    </form>
                </div>
            </div>
               
               
                
         </div> 

            <? if(!empty($_POST['SignUp'])){

                include 'connection.php';

                $email= $_POST['email'];
                $FirstName =$_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Password = password_hash($_POST['Password'],PASSWORD_DEFAULT);

                $query = "insert into Fuser (Email,FName,LName,Pass) values('$email','$FirstName','$LastName','$Password')";
                $result = mysql_query($query);
                    if (!$result) {
                     echo "could not enter data".mysql_error();
                    }
            }
            ?>
    </div>

    <!-- - - - - - - - - - - - - footer section- - - - - - - - - - - - - -->
    <?php include 'footer.php';?>

    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.js" type="text/javascript"></script>
    
</body>
</html>