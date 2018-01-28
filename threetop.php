<?php

error_reporting(0);

 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "saurav";
    $database = "sunnyfacemash";
    $dbport = 3306;

    // Create connection 
    $conn = new mysqli($servername, $username, $password, $database, $dbport);


		$stmt2 = $conn->prepare('SELECT * FROM user ORDER BY  likes desc LIMIT 3');
		$stmt2->execute();
		$result2 = $stmt2->get_result();
		while($r=$result2->fetch_assoc())
		{
			$res[] = $r;
		}

		echo json_encode($res);
		
		
?>