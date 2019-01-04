<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("DBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 
 $inProfile = $_POST["pro"];
 $inName = $_POST["Name"];
 $inGender = $_POST["radio"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $indate = $_POST["date"];
 $inReligion = $_POST["rel"];
$inMobile = $_POST["mobile"];
$inEmail = $_POST["Email"];
$inPassword = $_POST["Password"];
 
 $encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $stmt = $db->prepare("INSERT INTO users(profilefor,name,gender,dob,religion,mobile,email, password) VALUES(?, ?, ?, ?,?,?,?,?)"); //Fetching all the records with input credentials
 $stmt->bind_param("ssssssss",$inProfile,$inName,$inGender,$indate,$inReligion,$inMobile,$inEmail,$inPassword ); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: sucess.html"); // user will be taken to the success page
 
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 
 }
 }
?>
</body> 
</html>