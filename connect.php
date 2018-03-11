<?php
		/*$username = "banglaso_junayed";
		$password = "year1992";
		$hostname = "localhost";
		$db_name = "banglaso_hilldistdevlopform";	
		*/
		
		$username = "root";
		$password = "";
		$hostname = "localhost";
		$db_name = "hilldistdevlopform";	
		
		$connection = @mysqli_connect($hostname, $username, $password, $db_name);
				
		if(!$connection)
			die("connection failed...");
			
		 mysqli_query ($connection, "set character_set_client='utf8'"); 
		 mysqli_query ($connection, "set character_set_results='utf8'"); 
		 mysqli_query ($connection, "set collation_connection='utf8_general_ci'");
?>
