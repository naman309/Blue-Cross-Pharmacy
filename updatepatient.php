<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php

$PID = $_GET['ID'];
$con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');

$HG = "";

if (isset($_POST['update'])) {
    $PID = $_GET['ID'];
    $PNAME = $_POST['txtName'];
    $PADD = $_POST['txtAddress'];
    $PPHONE = $_POST['txtPhone'];
    $PDOB = $_POST['txtDOB'];
    $PPRES = $_POST['txtPrescription'];

    $query = " update patients set Patient_Name = '" . $PNAME . "', 
        Patients_DOB='" . $PDOB . "',  Patients_Prescription='" . $PPRES . "', 
        Patients_Address='" . $PADD . "',Patients_ContactNumber='" . $PPHONE . "' where idPatients='" . $PID . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $HG = 'Patient detail updated successfully';
    } else {
        echo ' Please Check Your Query ';
    }
} else {
    echo 'Vasu';
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
</head>

<body>
    <style>
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

    <div class="pageB">

        <div class="Inserted">
            Patient Record Updated Successfully
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