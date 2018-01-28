<html>
    <?php
    error_reporting(0);

	$servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "saurav";
    $database = "sunnyfacemash";
    $dbport = 3306;

    // Create connection 
    $conn = new mysqli($servername, $username, $password, $database, $dbport);
    ?>
    
    
    
    <head>
        
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Pacifico|Righteous" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
 <script src='myscript.js'></script>
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
        
      <style>
      
#square {
    background-color:#49c3b6;
    clear:both;
    height:100px;
    width:102%;
}

#card{
margin:20px;height:340px;background:white;
box-shadow: 0px 2px 5px #6f6f6f;
}
#card:hover{
box-shadow: 0px 2px 20px #6f6f6f;
}
      </style>
        
        </head>
        
        
        
        
        
        <body>
            
            
            <header style="background:#fff">
<div class="row" id="square">
<img style="height:120px;margin-left:40px;display: inline-block;" src ="logo.png">
<h2   style="display: inline-block;font-family: 'Pacifico', cursive; color:#fff">Facemash.</h2></div></div>
</header>
           
    
    <center><h2 style="font-family: 'Baloo Bhaina', cursive;">All Profiles</h2>
       <a href="index.html"><button style="margin:20px" class="btn btn-primary">Go Back</button>
    </a></center>
    <?php
    $stmt2 = $conn->prepare('SELECT * FROM user order by likes desc');
		$stmt2->execute();
		$result2 = $stmt2->get_result();
		while($r=$result2->fetch_assoc())
		{
			
			
			echo'
			<div class="col-sm-2" id="card">
<img id="topimage1" src="'.$r['image'].'" style="height: 250px;width: 100%;margin-top: 10px;">


<center><h4 id="topname1" style="color:black">'. $r['name'].'</h4></center>

<div class="score" style="margin-left: 65px;">

<img src="heart.png" style="display:inline-block;height:30px;width:30px;">
<h4 id="toplike1" style="color:black;position: absolute;margin-left: 10px;display:inline-block;">'.$r['likes'].'</h4>
</div>


</div>';
		
    
		    
		    
		}
    ?>
    
    
    <br>
  
    
    
    
    
    
    
    
            </body>
    
    
    
    
    
    
    </html>