<?php
// Connect to the database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbscanner";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// If the database connection fails
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to get the total number of scanned users for each booth strand
$sql = "SELECT booth_username AS Names, COUNT(*) AS Total FROM bvs_scanned_users JOIN bvs_booths ON fk_booth_id = booth_id GROUP BY booth_username";
$result = mysqli_query($conn, $sql);

// Store the results in an array
$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

// Close the database connection
mysqli_close($conn);
?>
