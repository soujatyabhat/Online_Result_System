<?php
$con = mysqli_connect("localhost","root","","test");
echo ($con) ? " " : mysqli_errno($con);
?>