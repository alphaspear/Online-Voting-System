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
                        <a href="admin.php">Home</a>
                    </li>
                    <li>
                        <a href="lan_view.php">Vote Results</a>
                    </li>
                    <li class="selected">
                        <a href="change_ques.php">Change question</a>
                    </li>
                    <li>
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
<h3>&nbsp;&nbsp;&nbsp;Change Question</h3>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<form action="change_ques_action.php" method="post" id="myform">


&nbsp;&nbsp;&nbsp;&nbsp;Question :&nbsp;&nbsp;&nbsp;
<input type="text" name="ques" value="" size="70">

<br>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;Option 1 :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="opt1" value="" size="70">

</br>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;Option 2 :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="opt2" value="" size="70">


</br>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;Option 3 :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="opt3" value="" size="70">

</br>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;Option 4 :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="opt4" value="" size="70">


<br>
<br>

<input style="margin-left:2.5%" type="submit" name="qpass" value="UPDATE" >

</form>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("ques","req","Please enter a  question"); 
frmvalidator.addValidation("opt1","req","Please enter the option"); 
frmvalidator.addValidation("opt2","req","Please enter the option"); 
frmvalidator.addValidation("opt3","req","Please enter the option"); 
frmvalidator.addValidation("opt4","req","Please enter the option"); 

</script>
</div>


<?php include "footer.php";?>




    </body>
</html>