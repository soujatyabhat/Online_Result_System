<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title> Sample Wipro </title>
    <style>
        body
        {
            background-image: linear-gradient(#cc6600, #ccffff);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:red;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
        p
        {
            text-align: center;
            color : red;
            font-weight: 900;
            text-shadow: 2px 2px white;
        }

        form
        {   
            margin-top:2%;
            background-color:	 #88cc00;
            padding: 30px 10px;
            width: 450px;
            margin-left:37%;
            border:2px solid black;
            box-shadow: 2px 5px white;
            border-radius: 5px;
        }
        select
        {
            width: 150px;
        }
        #l
        {
            font-size: 20px;
        }
        #c
        {
            font-size: 30px;
        }
        .b{
            padding:10px 16px;
             width:300px;
             
             font-size: 50px;
             border-radius:10px;
        }
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:300px;
                background-color:#32CD32;
                color: black;
                border: none;
                padding:55px 2px;
                font-size: 46px;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                }

         .block:hover {
            background-color: black;
                color: white;
                }
    </style>



</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>

<br>
<center>
<?php
// Connecting to the Database
include 'include.php';
// Die if connection was not successful
//if (!$con){
 //   die("Sorry we failed to connect: ". mysqli_connect_error());
//}
//else{
  //  echo "Connection was successful<br>";
//}

$sql = "SELECT * FROM `notice`";
$result = mysqli_query($con, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
// Display the rows returned by the sql query
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<h2  style = "color:black;font-size: 28px;">' .  "NOTICE :  ". $row['desc'].'</h2>' ;

       // echo "<br>";
    }


}
?>
<br><br><br><br>


<a class="bloc" href="/Online_Result_System/search.php" style = "background-color:black; padding:20px 56px;  border-radius: 40px; color:white;" >Back</a>
  
</center>



</body>
</html>
