<?php

		$host="localhost";
		$dbUsername="root";
		$dbPassword="";
		$dbName="movierecommendation";
		$conn=mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

		if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
		}
	/*	else{
			echo "connection Succesful !";
		}

		$sql = "SHOW TABLES FROM movierecommendation";
		$result = mysqli_query($conn,$sql);
		$value = "animated";
		while ($row = mysqli_fetch_row($result)) {
			/*if($value == "{$row[0]}")
			{
				echo "hi";
				
			} 

			echo "{$row[0]}\n";
			echo "<br>";
		} */
 ?>