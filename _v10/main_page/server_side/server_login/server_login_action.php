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

// Gets the form data
$server_login_NAME = $_POST['server_login_NAME'];
$server_login_PASSWORD = $_POST['server_login_PASSWORD'];

// Checking if data input and data from database is the same
$sql = "SELECT * FROM users WHERE user_name = '$server_login_NAME' AND user_password = '$server_login_PASSWORD' AND user_role = 'admin'";
$result = mysqli_query($conn, $sql);

// User authentication
if ($result->num_rows > 0) {
  // If the password inputs matched the hashed password in the database
  session_start();

  if($row = mysqli_fetch_array($result)) {
    $_SESSION["user_id"] = $row['user_id'];
    $_SESSION["booth_id"] = $row['booth_id'];

    header("Location: server_login_index.php");
    exit();
  }
} else {
  // User does not exist, display error message
  echo '<script language="javascript">
  alert("Invalid login credentials")
  window.location.href="../index.php";
  </script>';
}

// Closing connection to database
mysqli_close($conn);
?>
