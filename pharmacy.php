<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php
// database connection code
if (isset($_POST['txtName'])) {
  // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
  $con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');
  $digit = mt_rand(0, 999999);
  // get the post records
  $HG = "";
  $txtName = $_POST['txtName'];
  $txtMedicine = $_POST['txtMedicine'];
  $txtQuantity = $_POST['txtQuantity'];
  $txtPrice = $_POST['txtPrice'];

  // database insert SQL code
  $sql = "INSERT INTO `pharmacy` (`idPharmacy`, `Pharmacy_Name`, `Pharmacy_Medicine`, `Pharmacy_MedicineQuantity`, `Pharmacy_MedicinePrice`) 
VALUES ('$digit', '$txtName', '$txtMedicine', '$txtQuantity', '$txtPrice')";

  // insert in database 
  $rs = mysqli_query($con, $sql);
  if ($rs) {
    $HG = "Pharmacy Records Inserted";
  }
} else {
  echo "";

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacy Page</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/4031b26978.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
    rel="stylesheet" />
</head>

<body>
  <style>
    .Inserted {
      font-weight: bolder;
      font-size: 66px;
      margin-top: 150px;
      margin-bottom: 150px;
      background-color: pink;
      /* height: 252px; */
      text-align: center;
      font-style: italic;
    }

    .button {
      background-color: black;
      border: none;
      color: yellow;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-bottom: 20px;
      height: 40px;
      width: 13%;
      font-size: 27px;
      border-radius: 20px;
      color: yellow;
    }

    .footer_marg div {
      color: yellow;
    }

    footer {
      height: 71px;
    }
  </style>
  <div class="container flex heading">
    <header>
      <h1 id="homepage-title">BlueCross Pharmacy Form</h1>
    </header>
    <nav>
      <ul>
        <li><a href="./patientsList.php">Patient</a></li>

        <li><a href="./pharmacy.html">Pharmacy</a></li>

        <li><a href="./doctors.html">Doctors</a></li>
      </ul>
    </nav>
  </div>

  <div class="Inserted">
    Pharmacy Records Inserted to the Database
  </div>

  <!-- <h1><label for="Name"><?php echo $HG ?> </label></h1> -->
  <a href="./invoice.php" class="button">Get Report</a>

  <footer>
    <div class="container">
      <div class="container">
        <div class=" footer_marg">
          <div>&copy;Naman Sharma (8837689)</div>
          <div>&copy;Nidhi Bhuva (8874998)</div>
        </div>
      </div>
  </footer>

</body>

</html>