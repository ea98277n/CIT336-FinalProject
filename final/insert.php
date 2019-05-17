<?php
/* Inserts the data to the table */
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "CIT336final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$coinAbbreviation = mysqli_real_escape_string($link, $_GET['coinAbbreviation']);
$coinName = mysqli_real_escape_string($link, $_GET['coinName']);
$coinLogo = mysqli_real_escape_string($link, $_GET['coinLogo']);
$coinInfo = mysqli_real_escape_string($link, $_GET['coinInfo']);
$coinWebsite = mysqli_real_escape_string($link, $_GET['coinWebsite']);
 
// attempt insert query execution
$sql = "INSERT INTO coins (coinAbbreviation, coinName, coinLogo, coinInfo, coinWebsite) VALUES ('$coinAbbreviation', '$coinName', '$coinLogo', '$coinInfo', '$coinWebsite')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
