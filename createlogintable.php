<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "LoginDetails");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql ="CREATE TABLE userInfo(Unique_ID INT(4) AUTO_INCREMENT PRIMARY KEY,UserName CHAR(45) NOT NULL UNIQUE, Email_address VARCHAR(50),PASSWORD VARCHAR(15) NOT NULL, Repassword VARCHAR(15))";
if (mysqli_query($link, $sql)){
    echo "Table entry created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>