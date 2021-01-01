
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body
        {
            background-color: rgb(15, 209, 209);
        }
        h1
        {
            text-align: center;
            color:rgb(156, 79, 2);
            font-size: 70px;
        }
        form
        {
            background-color: cyan;
            padding: 30px 10px;
            width: 430px;
            margin-left:32%;
            border:2px dotted;
        }
        select
        {
            width: 150px;
        }
    </style>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
<h1> Anybody Public High School  </h1>
<?php
require_once 'include.php';
function grade($avg)
{
    if ($avg >= 60)
        $grade = "A";
    else if($avg >= 50)
        $grade = "B";
    else if($avg >= 40)
        $grade = "C";
    else
        $grade = "D";
return $grade;
}

$roll =  htmlentities($_GET['roll']);
$class =  htmlentities($_GET['class']);
//Query & retriving data from database
$query = "SELECT * FROM umarks WHERE roll = '$roll' AND class = '$class'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
?>
<table border = "2" cellspacing = "3" cellpadding = "3" align = "center" width = "500px" height = "100px" bgcolor = "cyan" bordercolor="red">
<tr>
        <th> Bengali </th> <th> English</th> <th> Science </th> <th> Total </th> <th> Avg </th> <th> Grade </th>
</tr>
<?php
if($count > 0) 
{ 
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['bng'] + $row['eng'] + $row['sci'];
    $avg = $sum / 3;
?>
<b>
<?php echo "Name : ". $row['name']?>
<br>
<?php echo "Roll : ". $row['roll']?>
<br>
<?php echo "Class : ". $row['class']?>
</b>
    <tr align = "center">
        <td> <?php echo $row['bng'] ?> </td> <td> <?php echo $row['eng'] ?> </td> <td> <?php echo $row['sci'] ?> </td> <td> <?php echo $sum ?> </td> <td> <?php echo round($avg) ?></td> <td> <?php echo grade($avg) ?></td>
    </tr>
</table>
<?php
}
else
{
?>
    <tr align = "center">
        <td colspan = "6"> <b> Result has not been published yet  </b> </td>
    </tr>
</table>
<?php
}
mysqli_close($con);
?>
<br>
<ul>
    <li> <a href = "search.php"> Click here to seach another </a> </li>
</ul>
</body>
</html>