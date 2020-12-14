
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
?>
<?php
include "connection.php";
///////////////////////
$member = mysqli_query($con, 'SELECT * FROM languages' );
//////////////////////
$me = mysqli_query($con, 'SELECT * FROM vquestion' );
if (mysqli_num_rows($me)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {

$m=mysqli_fetch_object($me);
while($mb=mysqli_fetch_object($member));
{	        $ques=$m->question;
            $op1=$m->option1;
            $op2=$m->option2;
            $op3=$m->option3;
            $op4=$m->option4;

}
}
//////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////

?>







<html>
    <head>
        <title>Welcome to online voting portal</title>
        <link rel="stylesheet" href="css/style2.css" type="text/css">
    </head>
    <body>
        
        

    <center>
        <div>
                <a href="index.php"><img src="images/gehu.svg" alt="LOGO" height="150" width="500"></a>
            </div>
</center>
            <div style="border:10px;width:80%;margin-left: 15%;">
            <div id="navigation">
                <ul>
                    <li class="selected">
                        <a href="voter.php">Home</a>
                    </li>
                    <li>
                        <a href="lan_view.php">Vote Results</a>
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

<?php
include "connection.php";
$v = mysqli_query($con,'SELECT * FROM vquestions');
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}


$mb=mysqli_fetch_object($member);
		
            $vote=$mb->votecount;
 ?>
<center>
<h2 style=""> Welcome <?php echo $_SESSION['SESS_NAME']; ?>, &nbsp; Please make a vote</h2>
</center>
</br>
</br>
<div style="width:36%;margin-left:32%;border-style:solid">
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<font size='6'>&nbsp;&nbsp;<?php echo"$ques" ?><BR>
<input type="radio" name="lan" value="one"><?php echo"$op1" ?><BR>
<input type="radio" name="lan" value="two"><?php echo"$op2" ?><BR>
<input type="radio" name="lan" value="three"><?php echo"$op3" ?><BR>
<input type="radio" name="lan" value="four"><?php echo"$op4" ?><BR>

</font><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

    </body>
</html>
