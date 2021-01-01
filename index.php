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
            background-color: gold;
        }
        h1
        {
            text-align: center;
            color:blue;
            font-size: 70px;
        }
        form
        {
            background-color: cyan;
            padding: 30px 10px;
            width: 430px;
            margin-left:36%;
            border:2px dotted;
        }
        select
        {
            width: 150px;
        }
    </style>
    <?php

        //Create Connection
        include 'include.php';
        if (isset($_REQUEST['submit']))
        {
            //Basic Details
            $roll = htmlentities($_REQUEST['roll']);
            $name = htmlentities($_REQUEST['name']);
            $class = htmlentities($_REQUEST['class']);

            //Subject//
            $bng = htmlentities($_REQUEST['bng']);
            $eng = htmlentities($_REQUEST['eng']);
            $sci = htmlentities($_REQUEST['sci']);

            //Query
            $query = "INSERT INTO umarks (roll,name,class,bng,eng,sci) 
            VALUES ('$roll','$name','$class','$bng','$eng','$sci')";

            // Condition checking & saving
            if(mysqli_query($con,$query))
            {
                echo "<script> alert('Data has saved') </script>";
            }
            else
            {
                die (mysqli_errno($con));
            }
        }
        //close connection
        mysqli_close($con);
    ?>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>
    <br>
    <div class = "container">
    <form action = "" method = "POST">
    <hr width = "full" size = "3" color = "red">
        <div>
        <caption> <strong> <u> Basic Info </u> </strong></caption>
        <br> <br>
            <label for = "roll"> Roll :  </label> <input type = "number" name = "roll" required>
        </div>
        <br>
        <div>
            <label for = "name"> Name :  </label> <input type = "text" name = "name" required>
        </div>
        <div>
            <br>
            <label for = "class"> Class:  </label>
            <select name = "class">
                <option readonly></option>
                <option>6A</option>
                <option>6B</option>
            </select>
        </div>
        <hr width = "full" size = "3" color = "red">
            <caption> <strong> <u> Subjects </u> </strong></caption>
            <br> <br>
            <label for = "name"> Bengali :  </label> <input type = "number" name = "bng" max = "100" min = "0" required>
            <label for = "name"> English :  </label> <input type = "number" name = "eng" max = "100" min = "0" required>
            <label for = "name"> Science :  </label> <input type = "number" name = "sci" max = "100" min = "0" required>
        <center>
            <br>
                 <button type = "submit" style = "background-color:#32CD32;" name = "submit"> Submit </button> 
                 <button type = "reset" style = "background-color:red;" name = "reset"> Reset </button>
        </div>
        </center>
    </form>
    <ul>
    <li> <a href = "search.php"> Search Result </a> </li>
    </ul>
    </div>
</body>
</html>