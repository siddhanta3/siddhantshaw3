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

<form action="swift12_2.php" method="post">  
<p id="Qp">12. Your neighbour is getting his house renovated, and it is taking lot of time for the interiors to complete.  The Carpenter’s work is creating lots of noise, and this is irritating everyone at home.  What would be your reaction to the neighbour?</p>
<p id="Ap">
A. <input type="text" name="r45" required> I think you should get all the preparation works outside, and get materials ready for assembly.  This will avoid the noise;
<br>
B. <input type="text" name="r46" required> Your renovation work is becoming a nuisance to us.  How long you want to torture us?;
<br>
C. <input type="text" name="r47" required> You too much be agitated at the noise the renovation works is creating;
<br>
D. <input type="text" name="r48" required> Is there any way whereby you can reduce the disturbance your renovation is causing to your neighbours?

</p>

<input type="submit" id="btn12" value="Submit" name="button12"> <input type="reset" value="Reset">
<br><br>

</form>


</div>
</body>
</html>





