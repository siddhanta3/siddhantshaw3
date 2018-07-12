<?php
session_start();
$con=mysqli_connect("localhost","sid","sid");
mysqli_select_db($con,"dynaminds");
?>

<?php


$qry = "select * from usertable order by id desc limit 1";
$run = mysqli_query($con,$qry);
$data = mysqli_fetch_array($run);

require("fpdf/fpdf.php");

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont("Arial","B",20);
$pdf->Cell(190,12,"SWIFT ASSESSMENT",0,1,"C");
 

$pdf->SetFont("Arial","B",16);
$pdf->Cell(190,10,"",0,1,"C");


$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Name",1,0,"C");
$pdf->SetFont("Arial","B",16);
$pdf->Cell(140,10,"{$data[1]}",1,1,"C");


$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Address",1,0,"C");
$pdf->SetFont("Arial","B",16);
$pdf->Cell(140,10,"{$data[2]}",1,1,"C");


$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Contact",1,0,"C");
$pdf->SetFont("Arial","B",16);
$pdf->Cell(140,10,"{$data[3]}",1,1,"C");


$pdf->SetFont("Arial","B",16);
$pdf->Cell(50,10,"Email id",1,0,"C");
$pdf->SetFont("Arial","B",16);
$pdf->Cell(140,10,"{$data[4]}",1,1,"C");



$pdf->Cell(190,10,"",0,1,"C");
$pdf->Cell(190,10,"",0,1,"C");




$qry1 = "select * from swifttable order by slno";
$run1 = mysqli_query($con,$qry1);



$pdf->SetFont("Arial","B",16);
$pdf->Cell(38,12,"Sl No.",1,0,"C");
$pdf->Cell(38,12,"C",1,0,"C");
$pdf->Cell(38,12,"A",1,0,"C");
$pdf->Cell(38,12,"S",1,0,"C");
$pdf->Cell(38,12,"E",1,1,"C");

while($data1=mysqli_fetch_array($run1))
{
$pdf->SetFont("Arial","B",16);
$pdf->Cell(38,10,"{$data1[0]}",1,0,"C");
$pdf->Cell(38,10,"{$data1[1]}",1,0,"C");
$pdf->Cell(38,10,"{$data1[2]}",1,0,"C");
$pdf->Cell(38,10,"{$data1[3]}",1,0,"C");
$pdf->Cell(38,10,"{$data1[4]}",1,1,"C");
}


$pdf->Cell(190,10,"",0,1,"C");
$pdf->Cell(190,10,"",0,1,"C");





$query = "select sum(C), sum(A), sum(S), sum(E) from swifttable";
$run2 = mysqli_query($con,$query);
$data2 = mysqli_fetch_array($run2);


$pdf->SetFont("Arial","B",16);
$pdf->Cell(190,12,"Total",1,1,"C");
$pdf->Cell(47.5,12,"C",1,0,"C");
$pdf->Cell(47.5,12,"A",1,0,"C");
$pdf->Cell(47.5,12,"S",1,0,"C");
$pdf->Cell(47.5,12,"E",1,1,"C");


$pdf->SetFont("Arial","B",16);

$pdf->Cell(47.5,10,"{$data2[0]}",1,0,"C");
$pdf->Cell(47.5,10,"{$data2[1]}",1,0,"C");
$pdf->Cell(47.5,10,"{$data2[2]}",1,0,"C");
$pdf->Cell(47.5,10,"{$data2[3]}",1,1,"C");




























$pdf->output();






?>