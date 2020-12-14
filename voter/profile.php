<html>
    <head>
    
        <title>Welcome to online voting portal</title>
        <script src="jscript/validation.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/css/style2.css" type="text/css">
    <style>
        h3{
            margin-left:18.7%;
        }
    </style>
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
                        <a href="profile.php">Profile</a>
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
include "connection.php";
?>
<center> <h2 style=""> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2> </center>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) 
echo"<center><h4></h4></center>"
        
        ?>
        

   
        
<?php
    }

?>
<br>
<br>
<?php include "footer.php";?>

    </body>
</html>