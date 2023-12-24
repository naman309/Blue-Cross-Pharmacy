<!-- Group Members :
1. Naman Sharma (8837689)
2. Nidhi Bhuva (8874998) -->

<?php
// database connection code
if (isset($_POST['txtName'])) {
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', 'root', '', 'group5_bluecross');

    // get the post records

    $UserID = $_GET['GetID'];
    $query = " select * from customer where idCustomer='" . $UserID . "'";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $UserID = $row['idCustomer'];
        $UserName = $row['name'];
        $UserAdd = $row['adress'];
        $UserDob = $row['dob'];
    }
}
?>