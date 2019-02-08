<?php
include('class_lib/StudentsDB_Access.php');

//$db = $_REQUEST["db"]; //uese defaults

print("<h2>");

$DB_Access = new StudentsDB_Access(); 

//print($DB_Access->connectTo()); //connectTo( ) called from within the methods in StudentsDB_Access
print("<hr />");
$DB_Result = $DB_Access->showDatabases( );
$rValue = "List of Databases in MySQL: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);

print("<hr />");
$DB_Result = $DB_Access->showTables();
$rValue = "List of Tables in students: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);

print("<hr />");
$table = "X"; // your tableName here
$DB_Result = $DB_Access->displayRecords($table);
$rValue = "List of Records from: " . $table . "<br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);

print("</h2>");
 

?>
