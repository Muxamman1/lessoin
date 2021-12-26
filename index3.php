<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    "<style>
    .error {color: #ff0000;}
    </style>"
</head>
<body>
    

<?php
/*array forms
$cars=array("GMC", "RAM", "CHEVY");
$item = count($cars);

for ($x=0; $X< $item; $x++) {
    echo $cars [$x];
    echo"<br>";
    
}*/


//PHP form Validation Example

  $name=$email=$gender=$website="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $website=test_input($_POST["website"]);
        $gender=test_input($_POST["gender"]);
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    ?>
    <h2>PHP From Validation Example</h2>
    <form method="post" action="<?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:<input type="text" name="name">
    <br><br>
    Email:<input type="text" name="email">
    <br><br>
    Website:<input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gander:
    <input type="radio" name="gander" value="female">Female
    <input type="radio" name="gander" value="male">Male
    <br><br>
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    echo "<h2>Your input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;

    
    //PHP FORM REQUIRED
    //define veriables and set to empty values
    
    

   $nameErr=$emailErr=$genderErr=$wedbiteErr="";
    $name=$email=$gender=$wedbite="";
    
    if ($_SERVER["REQUEST_METHOD"] ==  "POST" ){
        if (empty($_POST["name"])){
            $nameErr="Name is requred";
        }else{
            $name=test_input($_POST["name"]);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] ==  "POST" ){
        if (empty($_POST["email"])){
            $emailErr="Email is requred";
        }else{
            $email=test_input($_POST["email"]);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] ==  "POST" ){
        if (empty($_POST["website"])){
            $websiteErr="";
        }else{
            $website=test_input($_POST["website"]);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] ==  "POST" ){
        if (empty($_POST["comment"])){
            $commentErr="";
        }else{
            $comment=test_input($_POST["comment"]);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] ==  "POST" ){
        if (empty($_POST["gender"])){
            $genderErr="Gender is requred";
        }else{
            $gender=test_input($_POST["gender"]);
        }
    }

    function test_input($data)  {
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }

    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* require field</span></p>
    <form method="post" action="<?php echo
    htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Email: <input type="text" name="email">
    <span class="error ">* <?php echo $emailErr; ?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error">* <?php echo $websiteErr; ?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <span class="error">* <?php echo $genderErr;?></span> 
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

<?php
echo "<h2>Your input:</h2>";
echo"<br>";
echo $email;
echo"<br>";
echo $website;
echo"<br>";
echo $comment;
echo"<br>";
echo $gender;
?>


</body>
</html>



