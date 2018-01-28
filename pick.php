<?php

error_reporting(0);

	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "saurav";
    $database = "sunnyfacemash";
    $dbport = 3306;

    // Create connection 
    $conn = new mysqli($servername, $username, $password, $database, $dbport);
	
	$id=$_POST["id"];
	
	
	/*	$stmt1 = $conn->prepare("UPDATE conter SET hits = hits +1 where id=4");
        $stmt1->execute();*/
	
	if($id>0){
		$stmt1 = $conn->prepare("UPDATE user SET likes = likes +1 WHERE id =?");
                $stmt1->bind_param('i',$id);
                $stmt1->execute();
	}
	
		$stmt2 = $conn->prepare('SELECT * FROM user ORDER BY RAND() LIMIT 2');
		$stmt2->execute();
		$result2 = $stmt2->get_result();
		while($r=$result2->fetch_assoc())
		{
			
		$stmt1 = $conn->prepare("UPDATE user SET views = views +1 WHERE id =?");
                $stmt1->bind_param('i',$r['id']);
                $stmt1->execute();
			$res[] = $r;
		}

		echo json_encode($res);
	

?>