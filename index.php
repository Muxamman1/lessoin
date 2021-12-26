<?php

$con=new mysqli("localhost","root","","table");

$sql="select *from student";

$result=$con->query($sql);
$i=0;
$a=[];
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $a[$i++]=$row;
    }
}

$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<table class="table table-striped w-25">
    <tr>
        <th>id</th><th>name</th>
    </tr>
    <?php

foreach ($a as $item){
    echo "<tr>";
    echo "<td>",$item['id'],"</td>","<td>",$item['name'],"</td>";
    echo "</tr>";
}

?>
</table>
    


</body>
</html>