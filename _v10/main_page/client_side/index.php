<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../assets/css/form_index.css">
    <link rel="stylesheet" href="../assets/css/top_nav.css">
    <?php include '../assets/php/nav_bar_css.php'; ?>
  </head>

  <body>
    <?php
      include '../assets/php/nav_bar_.php';

      session_start();
      session_destroy();
      include 'client_login/client_login_form.php';
    ?>
  </body>
</html>
