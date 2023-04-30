<?php 
// Connect to database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbscanner";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// If database connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// QR scanner to database
session_start();

// Checking if 'text' has any value
if(isset($_POST['client_qr_USER_ID'])) {
    $client_qr_USER_ID = $_POST['client_qr_USER_ID'];
    $client_qr_BOOTH_ID = $_SESSION['booth_id'];

    // Insert the data into the database
    $sql = "INSERT INTO bvs_scanned_users (fk_booth_id, fk_user_id) VALUES('$client_qr_BOOTH_ID', '$client_qr_USER_ID')";

    try {
        if(mysqli_query($conn, $sql)) {
            echo '<script language="javascript">
            alert("Scan Success")
            window.location.href="client_qr_index.php";
            </script>';
            exit();
        }
    }
    catch(mysqli_sql_exception $e) {
        echo '<script language="javascript">
        alert("Error! QR code has already been used")
        window.location.href="client_qr_index.php";
        </script>';
    }
}

// Clossing connection to database
mysqli_close($conn);
?>
