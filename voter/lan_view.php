
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
{	
            $op1=$m->option1;
            $op2=$m->option2;
            $op3=$m->option3;
            $op4=$m->option4;
            $ques=$m->question;

}
}
//////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////

?>







<html>
    <head>
    <script src="jscript/validation.js" type="text/javascript"></script>
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
                    <li>
                        <a href="voter.php">Home</a>
                    </li>
                    <li class = "selected">
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
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$v = mysqli_query($con,'SELECT * FROM vquestions');
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
    echo"'<h3><center>$ques</center></h3>'";
	echo '<center><table><tr bgcolor="#FF6600">
<td width="100px"><center>ID</center></td>		
<td width="600px"><center>OPTION CONTENT</center></td>
<td width="100px"><center>VOTES</center></td>
</tr>';
$mb=mysqli_fetch_object($member);
		{
            $vote=$mb->votecount; 
	echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.'<center>Option 1</center>'.'</td>';		
	echo '<td>'.'<center>'.$op1.'</center>'.'</td>';
	echo '<td>'.'<center>'.$vote.'</center>'.'</td>';
    echo "</tr>";	
        }
        
        
        $mb=mysqli_fetch_object($member);
        {
	$vote=$mb->votecount;
	echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.'<center>Option 2</center>'.'</td>';		
	echo '<td>'.'<center>'.$op2.'</center>'.'</td>';
	echo '<td>'.'<center>'.$vote.'</center>'.'</td>';
	echo "</tr>";
    }
        


     $mb=mysqli_fetch_object($member);
     {
	$vote=$mb->votecount;
	echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.'<center>Option 3</center>'.'</td>';		
	echo '<td>'.'<center>'.$op3.'</center>'.'</td>';
	echo '<td>'.'<center>'.$vote.'</center>'.'</td>';
	echo "</tr>";
    }
        
    
    
    
    $mb=mysqli_fetch_object($member);
	{	

	$vote=$mb->votecount;
	echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.'<center>Option 4</center>'.'</td>';		
	echo '<td>'.'<center>'.$op4.'</center>'.'</td>';
	echo '<td>'.'<center>'.$vote.'</center>'.'</td>';
	echo "</tr>";
    }
        
	

	echo'</table></center>';
}
?>

<br>
<?php include "footer.php";?>
    </body>
</html>
