<?php global $msg; echo $msg;?>


<html>
    <head>
    <script src="jscript/validation.js" type="text/javascript"></script>
        <title>Welcome to online voting portal</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>        
    <div><center>    
                    <a href="index.php"><img src="images/gehu.svg" alt="LOGO" height="150" width="500"></a>
</center>
        </div>

            <center>
            <div style="width:80%;;">
            <div id="navigation">
                <ul>
                    <li class="selected">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
</center>
        </div>
    </body>
</html>


<?php include "footer.php";?>