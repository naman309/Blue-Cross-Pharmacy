<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php
$PID = $_GET['GetID'];
$con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');
$query = " select * from patients where idPatients='" . $PID . "'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $PID = $row['idPatients'];
    $PNAME = $row['Patient_Name'];
    $PADD = $row['Patients_Address'];
    $PPHONE = $row['Patients_ContactNumber'];
    $PDOB = $row['Patients_DOB'];
    $PPRES = $row['Patients_Prescription'];
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

    <form action="updatepatient.php?ID=<?php echo $PID ?>" method="post">
        <div class="patientPhp">
            <div class="phFlex">
                <label class="phLabel" for="Name">Name </label>
                <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" required
                    value="<?php echo $PNAME ?>">
            </div>
            <div class="phFlex">
                <label class="phLabel" for="DOB">DOB</label>
                <input type="date" class="form-control" name="txtDOB" id="txtDOB" placeholder="DOB"
                    value="<?php echo $PDOB ?>" required>
            </div>
            <div class="phFlex">
                <label class="phLabel" for="phone">Phone</label>
                <input type="text" class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone"
                    value="<?php echo $PPHONE ?>" required>
            </div>
            <div class="phFlex">
                <label class="phLabel" for="Address">Address</label>
                <input type="text" class="form-control" name="txtAddress" id="txtAddress" placeholder="Address"
                    value="<?php echo $PADD ?>" required>
            </div>
            <div class="phFlex">
                <label class="phLabel" for="Prescription">Prescription</label>
                <input type="text" class="form-control" name="txtPrescription" id="txtPrescription"
                    placeholder="Prescription" value="<?php echo $PPRES ?>" required>
            </div>
            <div>
                <button class="btn btn-primary btn-lg btn-block button" name="update">Update</button>
            </div>
        </div>
    </form>

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