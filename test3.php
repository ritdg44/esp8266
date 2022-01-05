<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "Welcome to my fucking clock";
    header("refresh: 3");
    echo date('H:i:s Y-m-d');
    exit;
    ?>
  </body>
</html>
