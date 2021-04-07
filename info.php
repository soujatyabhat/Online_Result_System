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
            background-image: linear-gradient(#ffff99,#ff6600);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
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

    <h1> Anybody Public High School  </h1>
    <?php
      session_start();
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      echo '<h2 >NAME :'.' '. $_SESSION['name'].'</h2>';
      echo '<h2 >ROLL :'.' '. $_SESSION['roll'].'</h2>';
      echo '<h2 >CLASS :'.' '. $_SESSION['class'].'</h2>';
}
?>
<br><br><br>
<a class="bloc" href="/Online_Result_System/search.php" style = "background-color:black; padding:20px 56px;  border-radius: 40px; color:white;" >Back</a>
</center>

</body>
</html>
