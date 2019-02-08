<?php
include('class_lib/StudentsDB_Access.php');

$db = $_REQUEST["db"];

print("<h2>");

$DB_Access = new StudentsDB_Access(); 
print($DB_Access->connectTo());

// selectone
print("<hr />");
$DB_Result = $DB_Access->SelectOne($db);
$rValue = "Result: <br />";
if($DB_Result != null)
{
	while($row = $DB_Result->fetch_assoc())
	{ 
		foreach($row as $value)
		{
			$rValue = $rValue . "$value <br />";
		}
	}
	print($rValue);
}
else 
{ 	
	print("Error in attempting to show table row for ID: " . $db); 
}

print("</h2>");
 
?>
