<?php

error_reporting(0);

 $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "saurav";
    $database = "sunnyfacemash";
    $dbport = 3306;

    // Create connection 
    $conn = new mysqli($servername, $username, $password, $database, $dbport);


$name=$_POST["name"];
$image_name= str_replace(' ', '', $name);
$stmtq = $conn->prepare('Select * from user where name = ?');
$stmtq->bind_param('s', $name);
$stmtq->execute();
$resultq = $stmtq->get_result();

if($resultq->num_rows > 0)
{
      echo 'name already exists';
}
else{
$target_dir = "";

$target_file = $target_dir .$_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
        $temp = explode(".", $_FILES["file"]["name"]);
$image_name = round(microtime(true)) . '.' . end($temp).'jpg';
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $image_name)) {
        
          $stmt1 = $conn->prepare("insert into user values(null,?,?,0,0)");
                $stmt1->bind_param('ss',$name,$image_name);
                if($stmt1->execute()){
        
        echo "Image Successfully has been uploaded.";}
        else{
            echo $name.$image_name.'cannot insert in db';
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
    
}


?>