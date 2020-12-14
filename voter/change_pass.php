<html>
    <head>
        <title>Welcome to online voting portal</title>
        <script src="jscript/validation.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/style2.css" type="text/css">
    </head>
    <body>
    <center>
        <div>
                <a href="index.php"><img src="images/gehu.svg" alt="LOGO" height="150" width="500"></a>
            </div>
</center>
            <div style="width:80%;margin-left: 15%;">
            <div id="navigation">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="lan_view.php">Vote Results</a>
                    </li>

                    <li class="selected">
                        <a href="change_pass.php">Change Password</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>


        </div>

        
        <?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
?>
<br>
<br>
<div style="width:600px;margin-left:35%;border-style:solid">
<h3>&nbsp;&nbsp;&nbsp;Change Password</h3>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<form action="change_pass_action.php" method="post" id="myform">
&nbsp;&nbsp;&nbsp;&nbsp;Current Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="cpassword" value="" >
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="npassword" value="" >
</br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Confirm New Password:
<input type="password" name="cnpassword" value="" >
<br>
<br>
<input style="margin-left:2.5%" type="submit" name="cpass" value="UPDATE" >
</form>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
</div>


<?php include "footer.php";?>




    </body>
</html>