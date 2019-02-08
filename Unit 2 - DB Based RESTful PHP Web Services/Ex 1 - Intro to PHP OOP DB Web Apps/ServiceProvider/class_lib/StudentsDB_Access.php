<?php

class StudentsDB_Access
{
    /** The static class wide mysqli connection information for sharing between functions */
    private static $conn;
	private static $hostName = "localhost";
	private static $databaseName = "students";
	private static $userName = "root";
	private static $password = "";

    public function connectTo()
    {
		//self::$databaseName = $databaseName; //Assigned above instead of passed to the method
		self::$conn = new mysqli(self::$hostName, self::$userName, self::$password, self::$databaseName );
		if (self::$conn->connect_error) {
			return("Connect Error to " . self::$hostName); //return error condition
        }
		return("Connection successful to hostName = " . self::$hostName . ", databaseName = " . self::$databaseName); 
    //return success statement, for above statement
   				
	}
	
	public function showDatabases()
	{	self::connectTo(); //make this a standalone function that uses default values assigned above
		$query = "SHOW DATABASES";
		$result = mysqli_query (self::$conn, $query);
		return $result;
	}
	
	public function showTables()
	{	self::connectTo(); //make this a standalone function that uses default values assigned above
		$query = "SHOW TABLES FROM " . self::$databaseName;
		$result = mysqli_query (self::$conn, $query);
		return $result;
	}
	public function displayRecords($tableName)
	{   self::connectTo();	//make this a standalone function that uses default values assigned above
		$query = "SELECT * FROM " . $tableName;
		$result = mysqli_query (self::$conn, $query);
		return $result;
	}
}

?>
