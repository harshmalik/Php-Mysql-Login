<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE LoginDetails";
if(mysqli_query($link, $sql)){
    echo "
<div class=\"alert\">
  <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> 
  <strong>CONGRATULATIONS!</strong> DATA BASE CREATED SUCESSFULLY.THIS FILE IS TO BE EXECUTED ONLY ONCE
</div>
";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<html>
<head>
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>
</body>
</html>