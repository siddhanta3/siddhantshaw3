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


<?php

if(isset($_POST['login']))
{
?>
<form action="swift1.php" method="post">

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


<input type="submit" id="btn1" name="button1" value="Submit" onClick="disableButton()">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}


$q1 = "select * from swift1 where slno='1'";
$r1 = mysqli_query($con,$q1);
$row1 = mysqli_num_rows($r1);

if($row1<1)
{
$a1 = $_POST['r1'];
$b1 = $_POST['r2'];
$c1 = $_POST['r3'];
$d1 = $_POST['r4'];

$sum1 = $a1+$b1+$c1+$d1;

if($sum1==4)
{
	$qry1 = "insert into swift1 values ('1','$a1','$b1','$c1','$d1')";
	$run1 = mysqli_query($con,$qry1);
}
}



if(isset($_POST['button1']))
{
	if($sum1==4)
{
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 1 has been submitted.</p>

<p id="Qp">2. You know that one of your best friends has been casual in appearing for an Examination.  That person has come to you to share news that he/she has failed in the Examination.  What would be your reply?</p>
<p id="Ap">
A. <input type="text" name="r5" required> I suggest that you put extra effort to do better next time;
<br>
B. <input type="text" name="r6" required> How would you like to go about, in your preparations, for the next attempt?;
<br>
C. <input type="text" name="r7" required> How could you have passed, when you did not take the exam seriously?;
<br>
D. <input type="text" name="r8" required> I understand how you would be feeling, to fail in an examination.

</p>



<input type="submit" id="btn2" value="Submit" name="button2">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
else
	{
	echo "error";
		}
}

?>




<?php
if(isset($_POST['button2']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 2 has been submitted.</p>
<p id="Qp">3. You have a strong concern for Traffic Sense, and you are in a traffic signal, waiting for the lights to turn to green, so that you can move.  A co-user of the road, a young boy, honks behind you, and signals to give him the way, so that he can move on.    What would you like to tell that person?</p>
<p id="Ap">
A. <input type="text" name="r9" required> I do understand you are in a hurry to move on;
<br>
B. <input type="text" name="r10" required> You should learn to follow Traffic Rules;
<br>
C. <input type="text" name="r11" required> You do not seem to understand that there is something called as Red Signal;
<br>
D. <input type="text" name="r12" required> Why are you in a hurry to jump signal?

</p>
<input type="submit" id="btn3" value="Submit" name="button3">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}

?>




<?php
if(isset($_POST['button3']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 3 has been submitted.</p>
<p id="Qp">4. Your Housekeeper, who promised to help you with cleaning the house before a big event in your home, has called you in the last minute to tell that it is not possible for him/her to come as something important has come up at his/her end.   What would you tell the housekeeper?</p>
<p id="Ap">
A. <input type="text" name="r13" required> How can you manage attending to your immediate need, and still help me with the cleaning?
<br>
B. <input type="text" name="r14" required> I understanding that an emergency has come up at your end;
<br>
C. <input type="text" name="r15" required> If you had told me earlier, I would have arranged for someone else to help me out;
<br>
D. <input type="text" name="r16" required> This is irresponsibility.  How can you let me down in the last minute?

</p>

<input type="submit" id="btn4" value="Submit" name="button4">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button4']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 4 has been submitted.</p>
<p id="Qp">5. You have been approached a younger relative of you, with a request to go through a letter he/she has written to the Principal.  That letter does not make any sense to you.   What would you tell your younger relative?</p>
<p id="Ap">
A. <input type="text" name="r17" required> I appreciate the time and effort you have taken to write this letter;
<br>
B. <input type="text" name="r18" required> You do not know how to put your thoughts into a letter?;
<br>
C. <input type="text" name="r19" required> What you intend conveying to the Principal through this letter?
<br>
D. <input type="text" name="r20" required> You should add strong points in order to add purpose to your letter.

</p>

<input type="submit" id="btn5" value="Submit" name="button5">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button5']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 5 has been submitted.</p>
<p id="Qp">6. The Driver of the Cab you have hired, is rash in his driving, and has just met with a minor accident.  How would you react to the Driver?</p>
<p id="Ap">
A. <input type="text" name="r21" required> You could have avoided the accident if you had listened  to me to drive carefully;
<br>
B. <input type="text" name="r22" required> I can see that you did not want the accident to happen;
<br>
C. <input type="text" name="r23" required> You are an irresponsible Driver.  You do not care for your safety of passengers.
<br>
D. <input type="text" name="r24" required> What could you have done to prevent the accident from happening?

</p>

<input type="submit" id="btn6" value="Submit" name="button6">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button6']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 6 has been submitted.</p>
<p id="Qp">7. You have stayed as a Guest in a Hotel for a few days, and your stay has been least pleasant.  At the time of check out, you ask for a Customer Feedback Form, to record your Feedback.  The Manager says that the Feedback Forms are exhausted.  What will be your reaction?</p>
<p id="Ap">
A. <input type="text" name="r25" required> This Place is the worst place I have ever stayed anywhere.    No care for the Customer;
<br>
B. <input type="text" name="r26" required> I think you should seriously take a look at the facilities you provide, and see where all you want to improve;
<br>
C. <input type="text" name="r27" required> It should really be a challenge to run a hotel, when the general commitment level of people being low;
<br>
D. <input type="text" name="r28" required> What do you think are top 5 concerns of this hotel, in becoming a better place?

</p>

<input type="submit" id="btn7" value="Submit" name="button7">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button7']))
{  
?>
<form action="swift1.php" method="post"> 
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 7 has been submitted.</p>
<p id="Qp">8. It is 2.30 PM on a relaxed Sunday.  You have just had your sumptuous lunch and all set to take a nap.  The door bell rings, and you see a Sales Person, eager to sell you a house hold product.</p>  
<p id="Ap">
A. <input type="text" name="r29" required> What would you think is a better way to approach a Customer, when there  is no appointment?
<br>
B. <input type="text" name="r30" required> Is this the time to make a Sales Call?  Why do not you think before you knock on someones door?
<br>
C. <input type="text" name="r31" required> I think you should fix up a call, before meeting a Prospect.
<br>
D. <input type="text" name="r32" required> I can see your enthusiasm in meeting a client, even if the timing is not right.

</p>

<input type="submit" id="btn8" value="Submit" name="button8">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button8']))
{  
?>
<form action="swift1.php" method="post">  
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 8 has been submitted.</p>
<p id="Qp">9. Your friends are forcing you to watch a movie that you have already seen, and not liked it.  What would you tell your friends?</p>
<p id="Ap">
A. <input type="text" name="r33" required> I understand your enthusiasm to have me with you people in watching the Movie;
<br>
B. <input type="text" name="r34" required> Why do not we go to another movie?  I have seen the movie, and it is bad;
<br>
C. <input type="text" name="r35" required> How did you freeze on this movie, when there are so many other options available?
<br>
D. <input type="text" name="r36" required> Why are you forcing me to join you in watching this stupid movie?

</p>

<input type="submit" id="btn9" value="Submit" name="button9">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>





<?php
if(isset($_POST['button9']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 9 has been submitted.</p>
<p id="Qp">10. Your mother has organized Food from a Caterer,  on the occasion of your Birthday.   You did not like it.   When your mother asks for your feedback, you would say -</p>
<p id="Ap">
A. <input type="text" name="r37" required> I did not like it one bit.  A worst caterer one can get.
<br>
B. <input type="text" name="r38" required> It would have tasted better, had he added a little more of sugar.   A good practice is to taste the food, before putting it on the Dining offering to Customers.
<br>
C. <input type="text" name="r39" required> What prompted you to choose this Caterer?  
<br>
D. <input type="text" name="r40" required> I know you wanted to make this occasion special to me.   I can understand your disappointment that the food was bad.</p>


<input type="submit" id="btn10" value="Submit" name="button10">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button10']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 10 has been submitted.</p>
<p id="Qp">11. On your way back from work, you notice that someone is ill-treating a child, by beating it harshly.  You feel like speaking to that person.   What would be your response?</p>
<p id="Ap">
A. <input type="text" name="r41" required> While are you hitting the child?  Is the child yours?;
<br>
B. <input type="text" name="r42" required> You must have been embarrassed by the child, and you are punishing the child for that;
<br>
C. <input type="text" name="r43" required> How can you be so mean, hitting an innocent child?;
<br>
D. <input type="text" name="r44" required> I think you should stop your behaviour, and find better  ways to discipline the child;

</p>


<input type="submit" id="btn11" value="Submit" name="button11">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>




<?php
if(isset($_POST['button11']))
{  
?>
<form action="swift1.php" method="post">  
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 11 has been submitted.</p>
<p id="Qp">12. Your neighbour is getting his house renovated, and it is taking lot of time for the interiors to complete.  The Carpenter�s work is creating lots of noise, and this is irritating everyone at home.  What would be your reaction to the neighbour?</p>
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
<?php
}
?>






<?php
if(isset($_POST['button12']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 12 has been submitted.</p>
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
<?php
}
?>




<?php
if(isset($_POST['button13']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 13 has been submitted.</p>
<p id="Qp">14. You have invited a friend of yours (not known for his punctuality) for dinner at home.  You have specifically told him to come by 7.30 PM.   The friend turns up at  9.45 PM.   He was not responding to your repeated phone calls too.  What would you like to say?</p>

<p id="Ap">
A. <input type="text" name="r53" required> You are late today too?  You do not even pick my calls;
<br>
B. <input type="text" name="r54" required> You must be feeling bad to be late, once again;
<br>
C. <input type="text" name="r55" required> I think you should become better in managing your time properly;
<br>
D. <input type="text" name="r56" required> There must be some reasons for you to be late;

</p>

<input type="submit" id="btn14" value="Submit" name="button14">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>





<?php
if(isset($_POST['button14']))
{  
?>
<form action="swift1.php" method="post">
<p style="color:#ff9730;font-size:20px;font-family:serif">Answer of Question 14 has been submitted.</p>
<p id="Qp">15. Your Grandmother has given you a Present on your Birthday, and you do not fancy it at all.  You do not want to show your disappointment to her.  What would you tell your mother about it?</p>
<p id="Ap">
A. <input type="text" name="r57" required> I think  you should have hinted to grandma on what I like;
<br>
B. <input type="text" name="r58" required> What do you think I should be doing with this gift?
<br>
C. <input type="text" name="r59" required> I understand the efforts grandma has put, to make my day special;
<br>
D. <input type="text" name="r60" required> Why does she waste money in buying such unwanted items?

</p>

<input type="submit" id="btn15" value="Submit" name="button15">  <input type="reset" value="Reset">
<br><br>

</form>
<?php
}
?>







<?php

if(isset($_POST['button15']))
{  
?>
<form method="post" action="finishpage.php">
<p style="color:#ff9730;font-size:20px;font-family:serif">You have answerd all the question. Click on Finish</p>
<?php


$_SESSION["uname"]=$uname;

?>
<input type="submit" value="Finish" name="finish">

</form>

<?php
}
?>

</div>

</body>
</html>




<?php



$q2 = "select * from swift2 where slno='2'";
$r2 = mysqli_query($con,$q2);
$row2 = mysqli_num_rows($r2);

if($row2<1)
{
$a2 = $_POST['r5'];
$b2 = $_POST['r6'];
$c2 = $_POST['r7'];
$d2 = $_POST['r8'];

$sum2 = $a2+$b2+$c2+$d2;

if($sum2==4)
{
	$qry2 = "insert into swift2 values ('2','$a2','$b2','$c2','$d2')";
	$run2 = mysqli_query($con,$qry2);
}
}






$q3 = "select * from swift3 where slno='3'";
$r3 = mysqli_query($con,$q3);
$row3 = mysqli_num_rows($r3);

if($row3<1)
{
$a3 = $_POST['r9'];
$b3 = $_POST['r10'];
$c3 = $_POST['r11'];
$d3 = $_POST['r12'];

$sum3 = $a3+$b3+$c3+$d3;

if($sum3==4)
{
	$qry3 = "insert into swift3 values ('3','$a3','$b3','$c3','$d3')";
	$run3 = mysqli_query($con,$qry3);
}
}








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
}
}








$q5 = "select * from swift5 where slno='5'";
$r5 = mysqli_query($con,$q5);
$row5 = mysqli_num_rows($r5);

if($row5<1)
{
$a5 = $_POST['r17'];
$b5 = $_POST['r18'];
$c5 = $_POST['r19'];
$d5 = $_POST['r20'];

$sum5 = $a5+$b5+$c5+$d5;

if($sum5==4)
{
	$qry5 = "insert into swift5 values ('5','$a5','$b5','$c5','$d5')";
	$run5 = mysqli_query($con,$qry5);
}
}









$q6 = "select * from swift6 where slno='6'";
$r6 = mysqli_query($con,$q6);
$row6 = mysqli_num_rows($r6);

if($row6<1)
{
$a6 = $_POST['r21'];
$b6 = $_POST['r22'];
$c6 = $_POST['r23'];
$d6 = $_POST['r24'];

$sum6 = $a6+$b6+$c6+$d6;

if($sum6==4)
{
	$qry6 = "insert into swift6 values ('6','$a6','$b6','$c6','$d6')";
	$run6 = mysqli_query($con,$qry6);
}
}









$q7 = "select * from swift7 where slno='7'";
$r7 = mysqli_query($con,$q7);
$row7 = mysqli_num_rows($r7);

if($row7<1)
{
$a7 = $_POST['r25'];
$b7 = $_POST['r26'];
$c7 = $_POST['r27'];
$d7 = $_POST['r28'];

$sum7 = $a7+$b7+$c7+$d7;

if($sum7==4)
{
	$qry7 = "insert into swift7 values ('7','$a7','$b7','$c7','$d7')";
	$run7 = mysqli_query($con,$qry7);
}
}







$q8 = "select * from swift8 where slno='8'";
$r8 = mysqli_query($con,$q8);
$row8 = mysqli_num_rows($r8);

if($row8<1)
{
$a8 = $_POST['r29'];
$b8 = $_POST['r30'];
$c8 = $_POST['r31'];
$d8 = $_POST['r32'];

$sum8 = $a8+$b8+$c8+$d8;

if($sum8==4)
{
	$qry8 = "insert into swift8 values ('8','$a8','$b8','$c8','$d8')";
	$run8 = mysqli_query($con,$qry8);
}
}










$q9 = "select * from swift9 where slno='9'";
$r9 = mysqli_query($con,$q9);
$row9 = mysqli_num_rows($r9);

if($row9<1)
{
$a9 = $_POST['r33'];
$b9 = $_POST['r34'];
$c9 = $_POST['r35'];
$d9 = $_POST['r36'];

$sum9 = $a9+$b9+$c9+$d9;

if($sum9==4)
{
	$qry9 = "insert into swift9 values ('9','$a9','$b9','$c9','$d9')";
	$run9 = mysqli_query($con,$qry9);
}
}










$q10 = "select * from swift10 where slno='10'";
$r10 = mysqli_query($con,$q10);
$row10 = mysqli_num_rows($r10);

if($row10<1)
{
$a10 = $_POST['r37'];
$b10 = $_POST['r38'];
$c10 = $_POST['r39'];
$d10 = $_POST['r40'];

$sum10 = $a10+$b10+$c10+$d10;

if($sum10==4)
{
	$qry10 = "insert into swift10 values ('10','$a10','$b10','$c10','$d10')";
	$run10 = mysqli_query($con,$qry10);
}
}











$q11 = "select * from swift11 where slno='11'";
$r11 = mysqli_query($con,$q11);
$row11 = mysqli_num_rows($r11);

if($row11<1)
{
$a11 = $_POST['r41'];
$b11 = $_POST['r42'];
$c11 = $_POST['r43'];
$d11 = $_POST['r44'];

$sum11 = $a11+$b11+$c11+$d11;

if($sum11==4)
{
	$qry11 = "insert into swift11 values ('11','$a11','$b11','$c11','$d11')";
	$run11 = mysqli_query($con,$qry11);
}
}










$q12 = "select * from swift12 where slno='12'";
$r12 = mysqli_query($con,$q12);
$row12 = mysqli_num_rows($r12);

if($row12<1)
{
$a12 = $_POST['r45'];
$b12 = $_POST['r46'];
$c12 = $_POST['r47'];
$d12 = $_POST['r48'];

$sum12 = $a12+$b12+$c12+$d12;

if($sum12==4)
{
	$qry12 = "insert into swift12 values ('12','$a12','$b12','$c12','$d12')";
	$run12 = mysqli_query($con,$qry12);
}
}













$q13 = "select * from swift13 where slno='13'";
$r13 = mysqli_query($con,$q13);
$row13 = mysqli_num_rows($r13);

if($row13<1)
{
$a13 = $_POST['r49'];
$b13 = $_POST['r50'];
$c13 = $_POST['r51'];
$d13 = $_POST['r52'];

$sum13 = $a13+$b13+$c13+$d13;

if($sum13==4)
{
	$qry13 = "insert into swift13 values ('13','$a13','$b13','$c13','$d13')";
	$run13 = mysqli_query($con,$qry13);
}
}















$q14 = "select * from swift14 where slno='14'";
$r14 = mysqli_query($con,$q14);
$row14 = mysqli_num_rows($r14);

if($row14<1)
{
$a14 = $_POST['r53'];
$b14 = $_POST['r54'];
$c14 = $_POST['r55'];
$d14 = $_POST['r56'];

$sum14 = $a14+$b14+$c14+$d14;

if($sum14==4)
{
	$qry14 = "insert into swift14 values ('14','$a14','$b14','$c14','$d14')";
	$run14 = mysqli_query($con,$qry14);
}
}













$q15 = "select * from swift15 where slno='15'";
$r15 = mysqli_query($con,$q15);
$row15 = mysqli_num_rows($r15);

if($row15<1)
{
$a15 = $_POST['r57'];
$b15 = $_POST['r58'];
$c15 = $_POST['r59'];
$d15 = $_POST['r60'];

$sum15 = $a15+$b15+$c15+$d15;

if($sum15==4)
{
	$qry15 = "insert into swift15 values ('15','$a15','$b15','$c15','$d15')";
	$run15 = mysqli_query($con,$qry15);
}
}






?>




















































