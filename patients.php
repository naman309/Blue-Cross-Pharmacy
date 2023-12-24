<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php
// database connection code
if (isset($_POST['txtMedicine'])) {
    $con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');

    // get the post records
    $digit = mt_rand(0, 999999);
    $txtName = $_POST['txtMedicine'];
    $txtDOB = $_POST['txtDOB'];
    $txtPhone = $_POST['txtPhone'];
    $txtAddress = $_POST['txtAddress'];
    $txtPrescription = $_POST['txtPrescription'];
    $HG = "";

    // database insert SQL code
    $sql = "INSERT INTO `patients` (`IdPatients`, `Patient_Name`, `Patients_DOB`, `Patients_ContactNumber`, `Patients_Address`, `Patients_Prescription`) 
VALUES ('$digit', '$txtName', '$txtDOB', '$txtPhone', '$txtAddress', '$txtPrescription')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo "Patient Records Inserted";
    }
    else{
        echo "Could not insert Patient record";
    }

    mysqli_close($con);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/4031b26978.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
        rel="stylesheet" />
</head>

<body>
    <style>
        .StartPage {
            font-weight: bolder;
            font-size: 100px;
            margin-top: 150px;
            margin-bottom: 150px;
            background-color: pink;
            /* height: 252px; */
            text-align: center;
        }

        footer {
            height: 71px;
        }

        .footer_marg div {
            color: yellow;
        }

        #homepage-title {
            color: yellow;
        }

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
    </style>

    <div class="container flex heading">
        <header>
            <h1 id="homepage-title">BlueCross Patient Form</h1>
        </header>
        <nav>
            <ul>
                <li><a href="./patientsList.php">Patient</a></li>

                <li><a href="./pharmacy.html">Pharmacy</a></li>

                <li><a href="./doctors.html">Doctors</a></li>
            </ul>
        </nav>
    </div>
    <!-- <div class="pageH">
        <h1><label for="Name">
                
            </label></h1>
    </div> -->

    <div class="StartPage">
        Welcome to the BlueCross
    </div>
    <footer>
        <div class="container">
            <div class=" footer_marg">
                <div>&copy;Naman Sharma (8837689)</div>
                <div>&copy;Nidhi Bhuva (8874998)</div>
            </div>
        </div>
    </footer>

</body>


</html>