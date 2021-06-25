<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>response</title>

<head>

<html>

<?php
$homepage = file_get_contents('./index.php', true);

//Define the required variables for the local database
$servername = "localhost";
$username = "root";
$password = "";
$db = "control_pannel";

$connect = mysqli_connect($servername, $username, $password,$db);

 $sql_ui_control = 'SELECT * FROM `conrol_pannel_table`';

 //to get the result
 $result = mysqli_query($connect, $sql_ui_control);

 // fetch the results
 $direction_commands = mysqli_fetch_all($result, MYSQLI_ASSOC);

//for print the last value from db
      echo $direction_commands[count($direction_commands)-1]['Forwards'];
      echo $direction_commands[count($direction_commands)-1]['Backwards'];
      echo $direction_commands[count($direction_commands)-1]['Right'];
      echo $direction_commands[count($direction_commands)-1]['Left'];
      echo $direction_commands[count($direction_commands)-1]['STOP'];
    

 // close connection with db
 mysqli_close($connect);
?>