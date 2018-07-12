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


<form action="swift13_2.php" method="post">
<p id="Qp">13. You have purchased an expensive product from a place where regularly shop.  Being a Festive time, the shop had lots of customers on the day you bought the product.   While trying the product at home, you find it is not working.  What would you tell the shop owner?</p>
<p id="Ap">
A. <input type="text" name="r49" required> I know you would feel bad if I say that the product that I took, is not working.  Your staff might not have had the time to check, because there were too many customer;
<br>
B. <input type="text" name="r50" required> In my todays shopping with you, I received a product that does not work.   What do you think your Staff need to do, to ensure that they do not deliver a faulty product?
<br>
C. <input type="text" name="r51" required> I feel bad that I received a faulty product from your shop.   I think you should ask your staff to check the workability of each product, before they hand it to the Customer;
<br>
D. <input type="text" name="r52" required> How can you take your regular customers for granted?   Your service quality is getting worse by the day;

</p>

<input type="submit" id="btn13" value="Submit" name="button13">  <input type="reset" value="Reset">
<br><br>

</form>


</div>
</body>
</html>





