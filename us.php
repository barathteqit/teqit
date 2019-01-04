<?php

$host = "localhost";
$userName = "root";
$password = "";
$dbName = "match";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);



$sql="INSERT INTO userdetails(FirstName,LastName,Mobile,Gender,DOB,Religion,Age,Height,Country,State,city,MotherTongue,Maritalstatus,Education,Occupation,AnnualIncome,Image,Manglik)

VALUES

('$_POST[fname]', '$_POST[lname]','$_POST[phone]','$_POST[date]','$_POST[rel]','$_POST[age]','$_POST[height]','$_POST[country]','$_POST[state]','$_POST[city]','$_POST[mother]','$_POST[marital]','$_POST[edu]','$_POST[op]','$_POST[income]','$_POST[image]','$_POST[manglik]')";

}



?>