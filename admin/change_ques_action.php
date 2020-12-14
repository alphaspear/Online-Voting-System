<?php
session_start();
include "auth.php";
include "connection.php"; 
if(isset($_POST['qpass'])) {
    


    $question = ($_POST['ques']) ;
    $option1  = ($_POST['opt1']) ;
    $option2  = ($_POST['opt2']) ;
    $option3  = ($_POST['opt3']) ;
    $option4  = ($_POST['opt4']) ;

    $question = addslashes($question);
    $option1  = addslashes($option1);
    $option2  = addslashes($option2);
    $option3  = addslashes($option3);
    $option4  = addslashes($option4);

    $question = mysqli_real_escape_string($con, $question);
    $option1  = mysqli_real_escape_string($con, $option1);
    $option2  = mysqli_real_escape_string($con, $option2);
    $option3  = mysqli_real_escape_string($con, $option3);
    $option4  = mysqli_real_escape_string($con, $option4);

    
   // $sql = "SELECT * FROM `vquestion`";
    
    //$sql = mysqli_query($con, "UPDATE vquestion SET question = $question, option1 = $option1, option2 = $option2, option3 = $option3, option4 = $option4 WHERE `vquestion`.`id` = 1 ");





    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "polltest";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE `vquestion` SET `question` = '$question', `option1` = '$option1', `option2` = '$option2', `option3`= '$option3', `option4` = '$option4' WHERE `vquestion`.`id` = 1 ";
    //UPDATE `vquestion` SET `question` = 'xxxx', `option1` = '1d', `option2` = '2d', `option3` = '3d', `option4` = '4d' WHERE `vquestion`.`id` = 1 

     //////////$sql = "UPDATE `voters` SET `status` = 'NOTVOTED' WHERE `status` = 'VOTED' ";




    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    



//$sql1 = mysqli_query($con, 'UPDATE languages SET password="'. md5($_POST['npassword']).'" WHERE username="'.$_SESSION['SESS_NAME'].'" ');
//////////////////////////////////////////////////////

//$sql2 = mysqli_query($con, 'UPDATE `languages` SET `options` = '$option1' WHERE `languages`.`lan_id` = 1');
//$sql3 = mysqli_query($con, 'UPDATE `languages` SET `options` = '$option2' WHERE `languages`.`lan_id` = 2');
//$sql4 = mysqli_query($con, 'UPDATE `languages` SET `options` = '$option3' WHERE `languages`.`lan_id` = 3');
//$sql5 = mysqli_query($con, 'UPDATE `languages` SET `options` = '$option4' WHERE `languages`.`lan_id` = 4');
//////////////////////////////////////////////////////

$error = "<center><h4><font color='green'>Question Changed</h4></center></font>";

include ("change_ques.php");



}


else {
	$error = "<center><h4><font color='#FF0000'>Error!</h4></center></font>";
	include ("change_pass.php");
}
?>