<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect("localhost","sid","sid");
mysqli_select_db($con,"dynaminds");

?>
<html>
<head><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


<link rel="stylesheet" href="mystyle.css">
<style>
#Ap{

font-size:18px;
color:#adafa8;
}
#Qp{

font-size:20px;
color:#7fa0f9;
}

body{
background-image: url("home.jpg");
font-family:serif;
}

input[type="submit"], input[Type="reset"]
{ text-align: center; 
height:30px;
width:100px;
color:#cecec8;
background:transparent;
font-size:20px;
font-family:serif;
padding:1px;
border:2px solid black;

}

input[type="submit"]:hover, input[Type="reset"]:hover
{ 
background:#262625;
box-shadow: 0px 0px 3px 0px black;
}

#heading{
text-shadow: 4px 4px 5px black;
color:#cecec8;
font-size:30px;
font-family:serif;

margin-top:30px;


}

#logo
{
height:80px;
width:160px;
margin-left:10px;
position:absolute;
margin-top:0px;
}


input[type=text]{

width:40px;
height:28px;
border:1px solid black;
background:#dee0e2;
color:black;
font-size:20px;
font-family:serif;

}

</style>



</head>
<body>
<?php


$q4 = "select * from swift4 where slno='4'";
$r4 = mysqli_query($con,$q4);
$row4 = mysqli_num_rows($r4);

if($row4<1)
{
$a4 = $_POST['r13'];
$b4 = $_POST['r14'];
$c4 = $_POST['r15'];
$d4 = $_POST['r16'];

$sum4 = $a4+$b4+$c4+$d4;

if($sum4==4)
{
	$qry4 = "insert into swift4 values ('4','$a4','$b4','$c4','$d4')";
	$run4 = mysqli_query($con,$qry4);
	echo "<p style='color:#ff9730;font-size:20px;font-family:serif;position:absolute;margin-top:60px;margin-left:200px'>Answer of Question 4 has been submitted.</p>";
	include 'swift5_1.php';
	
}
else
	{
		echo "<p style='position:absolute;margin-top:60px;font-size:20px;color:#ff9730;margin-left:200px'>Sum must be 4! Do again ...</p>";
		include 'swift4_1.php';

	}
}

?>



</body>
</html>


















