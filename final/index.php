<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Coin Library</title>
<style>
body {
  background-color: #232323;
  font-family: Verdana, sans-serif;
}

h1 {
  color: white;
}

#content {
    background-color: #FFF;
    margin-right: 20%;
    margin-left: 20%;
    padding-left: 10px;
    padding-right: 10px;
}

#coinName {

}

#coinAbbreviation {

}
</style>
</head>
<body>
<div id="content">
    <div id="coinName">
        












<?php
/* Displays the records from the table called coins */
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "CIT336final");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM coins ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div id='coinName'>" . $row['coinName'] . "</div>";
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Abbreviation</th>";
                echo "<th>Logo</th>";
                echo "<th>Info</th>";
                echo "<th>Website</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['coinName'] . "</td>";
                echo "<td>(" . $row['coinAbbreviation'] . ")</td>";
                echo "<td><img src='" . $row['coinLogo'] . "'></td>";
                echo "<td>" . $row['coinInfo'] . "</td>";
                echo "<td><a href='" . $row['coinWebsite'] . "'>Website</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href=\"add.html\">New Coin</a>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>
</body>
</html>