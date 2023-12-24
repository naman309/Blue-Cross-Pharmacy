<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->


<?php
// database connection code
if (isset($_POST['txtDocName'])) {
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');
    $HG = "";
    $digit = mt_rand(0, 999999);
    // get the post records

    $txtDocName = $_POST['txtDocName'];
    $txtSpecilization = $_POST['txtSpecilization'];
    $txtExperience = $_POST['txtExperience'];

    // database insert SQL code
    $sql = "INSERT INTO `doctors` (`idDoctors`,`Doctors_Name`,`Doctors_Specialization`,`Doctors_Experience`) 
VALUES ('$digit','$txtDocName','$txtSpecilization',  '$txtExperience')";

    // insert in database 
    $rs = mysqli_query($con, $sql);

    if ($rs) {
        $HG = "Doctor Records Inserted Successfully";
    }
} else {
    echo "Are you a genuine visitor?";

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Page</title>
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
            <h1 id="homepage-title">BlueCross Doctor's Form</h1>
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
        Doctors Record Inserted to the Database
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