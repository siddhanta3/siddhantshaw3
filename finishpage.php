
<?php
session_start();
$con=mysqli_connect("localhost","sid","sid");
mysqli_select_db($con,"dynaminds");
?>

<?php

	$q = "select * from swifttable where slno between 1 and 15";
	$r = mysqli_query($con,$q);
	$row = mysqli_num_rows($r);
	if($row<1)
{
	$qry1_1 = "select * from swift1";
	$run1_1 = mysqli_query($con,$qry1_1);
	$data1 = mysqli_fetch_array($run1_1);

	$qry1_2 = "insert into swifttable values('1','$data1[1]','$data1[4]','$data1[2]','$data1[3]')";
	$run1_2 = mysqli_query($con,$qry1_2);



	$qry2_1 = "select * from swift2";
	$run2_1 = mysqli_query($con,$qry2_1);
	$data2 = mysqli_fetch_array($run2_1);

	$qry2_2 = "insert into swifttable values('2','$data2[3]','$data2[1]','$data2[2]','$data2[4]')";
	$run2_2 = mysqli_query($con,$qry2_2);



	$qry3_1 = "select * from swift3";
	$run3_1 = mysqli_query($con,$qry3_1);
	$data3 = mysqli_fetch_array($run3_1);

	$qry3_2 = "insert into swifttable values('3','$data3[3]','$data3[2]','$data3[4]','$data3[1]')";
	$run3_2 = mysqli_query($con,$qry3_2);



	$qry4_1 = "select * from swift4";
	$run4_1 = mysqli_query($con,$qry4_1);
	$data4 = mysqli_fetch_array($run4_1);

	$qry4_2 = "insert into swifttable values('4','$data4[4]','$data4[3]','$data4[1]','$data4[2]')";
	$run4_2 = mysqli_query($con,$qry4_2);



	$qry5_1 = "select * from swift5";
	$run5_1 = mysqli_query($con,$qry5_1);
	$data5 = mysqli_fetch_array($run5_1);

	$qry5_2 = "insert into swifttable values('5','$data5[2]','$data5[4]','$data5[3]','$data5[1]')";
	$run5_2 = mysqli_query($con,$qry5_2);
	


	$qry6_1 = "select * from swift6";
	$run6_1 = mysqli_query($con,$qry6_1);
	$data6 = mysqli_fetch_array($run6_1);

	$qry6_2 = "insert into swifttable values('6','$data6[3]','$data6[1]','$data6[4]','$data6[2]')";
	$run6_2 = mysqli_query($con,$qry6_2);



	$qry7_1 = "select * from swift7";
	$run7_1 = mysqli_query($con,$qry7_1);
	$data7 = mysqli_fetch_array($run7_1);

	$qry7_2 = "insert into swifttable values('7','$data7[1]','$data7[2]','$data7[4]','$data7[3]')";
	$run7_2 = mysqli_query($con,$qry7_2);



	$qry8_1 = "select * from swift8";
	$run8_1 = mysqli_query($con,$qry8_1);
	$data8 = mysqli_fetch_array($run8_1);

	$qry8_2 = "insert into swifttable values('8','$data8[2]','$data8[3]','$data8[1]','$data8[4]')";
	$run8_2 = mysqli_query($con,$qry8_2);



	$qry9_1 = "select * from swift9";
	$run9_1 = mysqli_query($con,$qry9_1);
	$data9 = mysqli_fetch_array($run9_1);

	$qry9_2 = "insert into swifttable values('9','$data9[4]','$data9[2]','$data9[3]','$data9[1]')";
	$run9_2 = mysqli_query($con,$qry9_2);



	$qry10_1 = "select * from swift10";
	$run10_1 = mysqli_query($con,$qry10_1);
	$data10 = mysqli_fetch_array($run10_1);

	$qry10_2 = "insert into swifttable values('10','$data10[1]','$data10[2]','$data10[3]','$data10[4]')";
	$run10_2 = mysqli_query($con,$qry10_2);



	$qry11_1 = "select * from swift11";
	$run11_1 = mysqli_query($con,$qry11_1);
	$data11 = mysqli_fetch_array($run11_1);

	$qry11_2 = "insert into swifttable values('11','$data11[3]','$data11[4]','$data11[1]','$data11[2]')";
	$run11_2 = mysqli_query($con,$qry11_2);



	$qry12_1 = "select * from swift12";
	$run12_1 = mysqli_query($con,$qry12_1);
	$data12 = mysqli_fetch_array($run12_1);

	$qry12_2 = "insert into swifttable values('12','$data12[2]','$data12[1]','$data12[4]','$data12[3]')";
	$run12_12 = mysqli_query($con,$qry12_2);




	$qry13_1 = "select * from swift13";
	$run13_1 = mysqli_query($con,$qry13_1);
	$data13 = mysqli_fetch_array($run13_1);

	$qry13_2 = "insert into swifttable values('13','$data13[4]','$data13[3]','$data13[2]','$data13[1]')";
	$run13_2 = mysqli_query($con,$qry13_2);




	$qry14_1 = "select * from swift14";
	$run14_1 = mysqli_query($con,$qry14_1);
	$data14 = mysqli_fetch_array($run14_1);

	$qry14_2 = "insert into swifttable values('14','$data14[1]','$data14[3]','$data14[4]','$data14[2]')";
	$run14_2 = mysqli_query($con,$qry14_2);




	$qry15_1 = "select * from swift15";
	$run15_1 = mysqli_query($con,$qry15_1);
	$data15 = mysqli_fetch_array($run15_1);

	$qry15_2 = "insert into swifttable values('15','$data15[4]','$data15[1]','$data15[2]','$data15[3]')";
	$run15_2 = mysqli_query($con,$qry15_2);



}























?>




<html>
<head><link rel="stylesheet" href="finishpage.css"></head>
<body>
<div id="d1">
<h1 style="font-size:65px; color:white;text-align:center;margin-top:30px;">Congratulations!!!</h1>



<form action="pdf_page.php" method="post">
<input type="submit" value="Generate PDF" id="i1"name="pdf" style="">
</form>

<a href="logout.php" ><input type="submit" id="i2" value="LogOut" name="logout" style=""></a>
</div>

</body>
</html>
