<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php

$con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');
$query = " select * from patients ";
$result = mysqli_query($con, $query);


// database insert SQL code

// insert in database 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Patient records</title>
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
      height: 34px;
      width: 13%;
      font-size: 27px;
      border-radius: 20px;
      color: yellow;
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
  <br>
  <div>
    <a href="./patients.html" class="button">Add Patient</a>
  </div>

  <br>
  <br>
  <table>
    <tr>
      <th> ID </th>
      <th> Name </th>
      <th> Address </th>
      <th> Birth Date </th>
      <th> phone </th>
      <th> Prescription </th>
      <th> Edit </th>
      <th> Delete </th>
    </tr>

    <?php

    while ($row = mysqli_fetch_assoc($result)) {
      $PID = $row['idPatients'];
      $PNAME = $row['Patient_Name'];
      $PADD = $row['Patients_Address'];
      $PPHONE = $row['Patients_ContactNumber'];
      $PDOB = $row['Patients_DOB'];
      $PPRES = $row['Patients_Prescription'];
      ?>
      <tr>
        <td>
          <?php echo $PID ?>
        </td>
        <td>
          <?php echo $PNAME ?>
        </td>
        <td>
          <?php echo $PADD ?>
        </td>
        <td>
          <?php echo $PPHONE ?>
        </td>
        <td>
          <?php echo $PDOB ?>
        </td>
        <td>
          <?php echo $PPRES ?>
        </td>
        <td><a class="EditButton" href="editpatients.php?GetID=<?php echo $PID ?>">Edit</a></td>
        <td><a class="DeleteButton" href="deletepatients.php?Del=<?php echo $PID ?>">Delete</a></td>
      </tr>
      <?php
    }
    ?>
  </table>

  <br>
  <br>
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