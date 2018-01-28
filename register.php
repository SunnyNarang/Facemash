<?php

//error_reporting(0);

	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "saurav";
    $database = "sunnyfacemash";
    $dbport = 3306;

    // Create connection 
    $conn = new mysqli($servername, $username, $password, $database, $dbport);
	
	$name=$_POST["name"];
	$image=$_POST["image"];
	$email=$_POST["email"];
	
	/*	$stmt1 = $conn->prepare("UPDATE conter SET hits = hits +1 where id=4");
        $stmt1->execute();*/
	

		$stmt1 = $conn->prepare("insert into register values(null,?,?,?)");
                $stmt1->bind_param('sss',$name,$image,$email);
                if($stmt1->execute()){
                    echo 'done';
                }
                else echo 'fuck';
                    
              
                
	
	
	

?>