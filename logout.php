 <?php
$con=mysqli_connect("localhost","sid","sid");
mysqli_select_db($con,"dynaminds");
session_start();
session_destroy();

$q1 = "TRUNCATE table swifttable";
$q2 = "TRUNCATE table swift1";
$q3 = "TRUNCATE table swift2";
$q4 = "TRUNCATE table swift3";
$q5 = "TRUNCATE table swift4";
$q6 = "TRUNCATE table swift5";
$q7 = "TRUNCATE table swift6";
$q8 = "TRUNCATE table swift7";
$q9 = "TRUNCATE table swift8";
$q10 = "TRUNCATE table swift9";
$q11 = "TRUNCATE table swift10";
$q12 = "TRUNCATE table swift11";
$q13 = "TRUNCATE table swift12";
$q14 = "TRUNCATE table swift13";
$q15 = "TRUNCATE table swift14";
$q16 = "TRUNCATE table swift15";


$run1 = mysqli_query($con,$q1);
$run2 = mysqli_query($con,$q2);
$run3 = mysqli_query($con,$q3);
$run4 = mysqli_query($con,$q4);
$run5 = mysqli_query($con,$q5);
$run6 = mysqli_query($con,$q6);
$run7 = mysqli_query($con,$q7);
$run8 = mysqli_query($con,$q8);
$run9 = mysqli_query($con,$q9);
$run10 = mysqli_query($con,$q10);
$run11 = mysqli_query($con,$q11);
$run12 = mysqli_query($con,$q12);
$run13 = mysqli_query($con,$q13);
$run14 = mysqli_query($con,$q14);
$run15 = mysqli_query($con,$q15);
$run16 = mysqli_query($con,$q16);


header('location:loginform.php');

 ?>
