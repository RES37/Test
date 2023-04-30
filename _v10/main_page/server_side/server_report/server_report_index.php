<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../../assets/css/top_nav.css">
    <link rel="stylesheet" href="../../assets/css/icon_index.css">
    <?php include '../../assets/php/nav_bar_css.php'; ?>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include '../../assets/php/nav_bar.php';
        session_start();
        if(isset($_SESSION['user_id'])) {
            include 'server_report_action.php';
            include 'server_report_form.php';
        }
        else {
            header("Location: ../index.php");
        }
    ?>
</body>
</html>
