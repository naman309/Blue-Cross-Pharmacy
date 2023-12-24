<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php
ob_start();
include_once('fpdf184/fpdf.php');

//create class 
class PDF extends FPDF
{
  function Header()
  {
    //get date 
    $date = date("Y/m/d");

    //use this class

    $this->SetFont('Arial', 'B', '10');

    $this->Cell(140, 5, $date, 0, 1);
    $this->Cell(15, 15, 'Shoppers Drug Mart.', 0, 1);
    $this->Cell(10, 5, '109 Colborne Street ', 0, 0);
    $this->Cell(50, 5, '', 0, 0);
    $this->Cell(65, 5, '519-764-7836', 0, 1);
    $this->Cell(10, 5, 'Brantford, ON , Canada', 0, 0);
    $this->Cell(50, 5, '', 0, 0);
    $this->Cell(65, 5, 'shopdrug@pharma.ca', 0, 1);
    $this->Cell(10, 5, 'N7N 8EN', 0, 0);
    $this->Cell(50, 5, '', 0, 0);
    $this->Cell(65, 5, 'www.shoppersmart.com', 0, 1);

    $image1 = "Conestoga_College_logo.svg.png";
    $this->Image($image1, 150, 10, 40, 30);


    $this->Cell(150, 10, '', 0, 1);

    //Billed to

    $this->Cell(10, 5, 'Billed to: ', 0, 1);
    $this->Cell(10, 3, '', 0, 1);
    $this->Cell(25, 5, 'Naman Sharma', 0, 1);
    $this->Cell(10, 5, '64 Longboat Run ', 0, 1);
    $this->Cell(10, 5, 'Brantford, ON , Canada', 0, 1);
    $this->Cell(10, 5, 'N3T 0P8', 0, 1);
    $this->Cell(10, 5, '123-456-7890', 0, 1);
    $this->Cell(10, 5, 'pm@gmail.com', 0, 1);

  }

}

// read from database
// Create connection
$con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "select * from pharmacy";
$result = mysqli_query($con, $sql);
$datastore = $result;
$con->close();


$pdf = new PDF('P', 'mm', 'A4'); //  create object
$pdf->AddPage();


$pdf->Cell(50, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
/*Heading Of the table*/
$pdf->Cell(10, 6, 'Sr No', 1, 0, 'C');
$pdf->Cell(80, 6, 'Medicine', 1, 0, 'C');
$pdf->Cell(23, 6, 'Qty', 1, 0, 'C');
$pdf->Cell(30, 6, 'Unit Price', 1, 0, 'C');
$pdf->Cell(20, 6, 'Sales Tax', 1, 0, 'C');
$pdf->Cell(25, 6, 'Total', 1, 1, 'C'); /*end of line*/

$pdf->SetFont('Arial', '', 10);
$i = 0;
$tp = 0;
$fp = 0;
while ($row = $result->fetch_assoc()) {
  $i = $i + 1;
  $tp = ($row["Pharmacy_MedicineQuantity"] * $row["Pharmacy_MedicinePrice"]) + 10;
  $fp = $fp + $tp;
  $pdf->Cell(10, 6, $i, 1, 0);
  $pdf->Cell(80, 6, $row["Pharmacy_Medicine"], 1, 0, 'L');
  $pdf->Cell(23, 6, $row["Pharmacy_MedicineQuantity"], 1, 0, 'R');
  $pdf->Cell(30, 6, $row["Pharmacy_MedicinePrice"], 1, 0, 'R');
  $pdf->Cell(20, 6, "10", 1, 0, 'R');
  $pdf->Cell(25, 6, $tp, 1, 1, 'R');


}



$pdf->Cell(118, 6, '', 0, 0);
$pdf->Cell(25, 6, 'Subtotal', 0, 0);
$pdf->Cell(45, 6, $fp, 1, 1, 'R');


$pdf->Cell(140, 5, '', 0, 0);
$pdf->Cell(50, 30, "", 'B', 1);

$pdf->Cell(140, 5, '', 0, 0);
$pdf->Cell(50, 5, "Signature", 0, 1);
$pdf->Cell(45, 5, '', 0, 1);

$pdf->Cell(10, 5, 'Terms : ', 0, 1);
$pdf->Cell(10, 3, '', 0, 1);
$pdf->Cell(10, 5, 'Please pay the total amount before billing date.', 0, 1);





$pdf->Output();
//print the page

?>