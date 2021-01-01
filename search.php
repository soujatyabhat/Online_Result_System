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
            background-color: rgb(172, 227, 52);
        }
        h1
        {
            text-align: center;
            color:rgb(201, 59, 30);
            font-size: 70px;
        }
        p
        {
            text-align: center;
            color : red;
            font-weight: 900;
        }
        form
        {
            background-color: gold;
            padding: 30px 10px;
            width: 430px;
            margin-left:34%;
            border:2px dotted;
        }
        select
        {
            width: 150px;
        }
    </style>

    <?php
        if (isset($_REQUEST['submit']))
        {
            //Basic Details
            $roll = htmlentities($_REQUEST['roll']);
            $class = htmlentities($_REQUEST['class']);

            header("location:result.php?roll=$roll&class=$class");
        }
    ?>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>
    <p> Seach Annual Score </p>
    <div class = "container">
    <form action = "" method = "POST">
        <div>
        <caption> <strong> <u> Basic Info </u> </strong></caption>
        <br> <br>
            <label for = "roll"> Roll :  </label> <input type = "number" name = "roll" required>
        </div>
            <br>
            <label for = "class"> Class:  </label>
            <select name = "class">
                <option readonly></option>
                <option>6A</option>
                <option>6B</option>
            </select>
            <br> <br>
            <center>
                 <button type = "submit" style = "background-color:#32CD32;" name = "submit"> Search </button> 
                 <button type = "reset" style = "background-color:red;" name = "reset"> Reset </button>
            </center>
            </div>
        </div>
    </form>
    </div>
</body>
</html>