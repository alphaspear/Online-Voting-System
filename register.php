<html>
    <head>
    <script src="jscript/validation.js" type="text/javascript"></script>
        <title>Register</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        
        
        <div><center>    
                    <a href="index.php"><img src="images/gehu.svg" alt="LOGO" height="150" width="500"></a>
</center>
        </div>
        <div style="width:80%;margin-left: 10%;">
            <div id="navigation">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="selected">
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        <script src='https://www.google.com/recaptcha/api.js'></script>
<?php
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input type="text" name="username" value="" />
<br>
<br>
Password: 
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
<input type="submit" name="submit" value="Next" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>

    </body>
</html>