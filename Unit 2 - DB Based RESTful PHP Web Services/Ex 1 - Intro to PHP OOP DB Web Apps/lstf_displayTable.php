<?php

//setup connection variables at top of code to make it easy to change them
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "students";
$tableName = "x"; // your tableName here

$mysqli = new mysqli($hostName, $userName, $password, $databaseName );
if ($mysqli->connect_error) {
    die("<h2>Connect Error to $hostName: "
            . $mysqli->connect_error . "</h2>");
}
print("Connection successful to: <br />
hostName = $hostName <br />
databaseName = $databaseName<br /><br >");
print("<hr />");

//Show Databases on the MySQL host specified
$query = "SHOW DATABASES";
$result = $mysqli->query($query);
if(!$result){
    die('There was an error running the query [' . $mysqli->error . ']');
}
print("query \"$query\" successful!<br /><br />");

while($row = $result->fetch_assoc()){
    print_r( $row ); 
	print("<br />");
	}
print("<hr />");

//Show tables in the database specified
$query = "SHOW TABLES FROM $databaseName";
 
$result = $mysqli->query($query);

if(!$result){
    die('There was an error running the query [' . $mysqli->error . ']');
}
print("query \"$query\" successful!<br /><br />");

while($row = $result->fetch_assoc()){
    print_r( $row ); 
	print("<br />");
	}
print("<hr />");
	
$query = 'SELECT * FROM ' . $tableName; //Create a SQL statement string

if(!$result = $mysqli->query($query)){
    die('There was an error running the query [' . $mysqli->error . ']');
}

print("query \"$query\" successful!<br /><br />");
//Display all rows / contents of $result object returned by query using fetch_assoc() method
while($row = $result->fetch_assoc()){
    print( $row["X"] . " " . $row["XX"] . " " . $row["XXX"] . " " . $row["XXXX"] . "<br />");
    // above for each $row["x"] replace x with the column in your DB 
}

$mysqli->close();

?>
