<?php

// $bugungisana=strtotime("Friday");
// $bugungisana=strtotime("+2 day", $bugungisana);
// echo date ("d,m,Y", $bugungisana);
// echo readfile("../shop/home.html");
// $note=fopen("../registration/info.txt",  "r") or die("not found");
// echo fread($note, filesize("../registration/info.txt"));
// fclose($note);

// $eight=fopen("../registration/info.txt", "w");
// fwrite($eight, "Salom dunyo");
// fclose($eight);
// echo readfile("../registration/info.txt");

// $file=fopen("../registration/info.txt", "r");
// while (!feof($file)){
//     echo fgets($file), "<br>";
// }$file=fopen("../registration/info.txt", "r");




// fclose($file);
// $sum=0;
// $file=fopen("../registration/info.txt", "r");
// $sum=0;
// while (!feof($file)){
//     $c=fgetc($file);
//     if($c>='0' && $c<='9'){
//         $sum+=(int)$c;
//     }
// }
// echo $sum;

// fclose($file);


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 500000) {
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
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> 
        <input type="file" name="image">
        <input type="submit" name="submit" value="select image">
    </form>
</body>
</html>