<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect("localhost","sid","sid");
mysqli_select_db($con,"dynaminds");

?>


<?php
if(isset($_REQUEST['login']))
{
$uname=$_POST['uname'];
$addr=$_POST['addr'];
$cont=$_POST['cont'];
$email=$_POST['email'];

$query = "insert into usertable values('','$uname','$addr','$cont','$email')";

$runnn = mysqli_query($con,$query);
}




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


<div id="bodydiv">

<img src="logo2.jpg" id="logo">
<center><p id="heading">SWIFT ASSESSMENT</p></center>
<br>


<form action="swift1_2.php" method="post">

<p id="Qp">1. You have a near and dear one, who is repeating his/her mistakes time and again.  What would you like to say to let him/her know of what you are thinking.</p>

<p id="Ap">
A. <input type="text" name="r1" id="tb1" required> You do not seem to be learning from your earlier mistakes;
<br>
B. <input type="text" name="r2" id="tb1" required> What do you think you should be doing, to avoid repeating your mistakes?
<br>
C. <input type="text" name="r3" id="tb1" required> You must be feeling bad about repeating the same mistake, again;
<br>
D. <input type="text" name="r4" id="tb1" required> Why do not you think before you act, so that you do not make same mistakes again and again.
</p>


<input type="submit" id="btn1" name="button1" value="Submit">  <input type="reset" value="Reset">
<br><br>

</form>


</div>
</body>
</html>





