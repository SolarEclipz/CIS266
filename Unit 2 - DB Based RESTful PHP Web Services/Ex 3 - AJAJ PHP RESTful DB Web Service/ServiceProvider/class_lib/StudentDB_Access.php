<?php

Class StudentDB_Access
{
    // static class wide mysqli conn. info.
    private static $conn;
	private static $hostName = "localhost";
    private static $databaseName = "students";
    private static $tablename = "x"; // where x is your tableName
	private static $userName = "root";
    private static $password = "";

    //public $result_array = array();
    
    // Connect to DB
    public function connectTo()
    {
		//self::$databaseName = $databaseName; //Assigned above instead of passed to the method
		self::$conn = new mysqli(self::$hostName, self::$userName, self::$password, self::$databaseName );
		if (self::$conn->connect_error) {
			return("Connect Error to " . self::$hostName); //return error condition
        }
		return("Connection successful to hostName = " . self::$hostName . ", databaseName = " . self::$databaseName); 
    //return success statement
   				
	}

    // Return one row from DB
    public function SelectOne($db)
	{
        self::connectTo();
		$query = "SELECT * FROM x WHERE ID = '$db'"; // where x is your tableName
		$result = mysqli_query(self::$conn, $query);
		//$row = mysqli_fetch_assoc($result);
        return $result;
        
    }
    
    // Return all rows from DB
    public function SelectAll()
	{
		$query = "SELECT * FROM " . $tablename;
		$result = mysqli_query(self::$conn, $query);
		//$row = mysqli_fetch_assoc($result);
        return $result;
        
    }


}
?>
