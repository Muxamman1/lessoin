<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error { color:#ff0000;}
    </style>
</head>
<body>
    <?php

use PHPUnit\Framework\Test;

$nameErr=$emailErr=$genderErr=$websiteErr=" ";
    $name=$email=$gender=$comment=$website=" ";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])){
            $nameErr="Name is required";
        }else{
            $name= test_input($_POST["name"]);
            //check if name only  contailns lettes and whilespace
            if (!preg_match("/^[a-zA-Z-' ]*$",$name)){
                $nameErr="Only lettersand white space allowed";
            }
        }

        
        if (empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
            $email= test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALID_EMAIL)){
            $emailErr = "Invalid eamil format";
        }
        }

        if (empty($_POST["website"])){
            $website="";
        }else{
            $website=test_input($_POST["website"]);
            //check if URL address syntax is valid (this regular expression also allows dashes   in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
            $websiteErr="Invalid URL";
        }
    }

    if  (empty($_POST["comment"])){
        $comment=" ";
    }else

    ?>
</body>
</html>