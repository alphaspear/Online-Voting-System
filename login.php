<html>
    <head>
    <script src="jscript/validation.js" type="text/javascript"></script>
        <title>Login</title>
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
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li class="selected">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>

        </div>

        <?php 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter/voter.php");
}
?>
<br>
<center>
<legend> <h3>Login for Voting </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>

<?php include "footer.php"; ?>


    </body>
</html>