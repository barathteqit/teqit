<!DOCTYPE HTML>
<html>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 include("DBConnection.php"); // include the connection object from the DBConnection.php
 if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
	 $first_name = $_POST['fname'];
     $last_name = $_POST['lname'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$rel = $_POST['rel'];
$age = $_POST['age'];
$height = $_POST['height'];
$country = $_POST['country']; 
$state =$_POST['state'];
$city = $_POST['city'];
$mother = $_POST['mother'];
$marital = $_POST['marital'];
$educ = $_POST['edu'];
$occup = $_POST['op'];
$income =$_POST['income'];
$image = $_POST['image'];
$manglik = $_POST['manglik'];

$stmt = $db->prepare("INSERT INTO userdetails(id,FirstName,LastName,Mobile,Gender,DOB,Religion,Age,Height,Country,State,city,MotherTongue,Maritalstatus,Education,Occupation,AnnualIncome,Image,Manglik)

VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?"); //Fetching all the records with input credentials
 $stmt->bind_param("ssssssssssssssssss",$first_name, $last_name,$phone,$gender,$date,$rel,$age,$height,$country,$state,$city,$mother,$marital,$educ,$occup,$income,$image,$manglik  ); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if(! $result)
 {
  echo "Oops. Something went wrong. Please try again"; 
 }
 else
 {
 
 echo "Record inserted successfully!!!";
 }
 }

?>

</body> 
</html>