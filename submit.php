<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Parameters</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    body {
        background-image: url('stardust.png');
        font-family: 'Open Sans', sans-serif;
        color: white;
    }
    tbody {
        padding-top: 25px;
    }
    table {
        margin-top: 25px;
      width: 480px;
      margin: auto;
      border: 2px solid white;
    }
    table th {
        padding: 10px;
        text-align: center;
    }
    table td {
      text-align: left;
      padding: 10px;
    }
    table th.bigth {
        padding: 15px;
      text-align: center;
      font-size: 24px;
    }
    </style>
  </head>
  <body>
    <?php
    if (count($_GET) == 0 && count($_POST) == 0) {
      echo "No data was submitted.";
    }
    ?>
    <table border="1" width="400">
      <?php
      if (count($_GET) > 0) {
      ?>
        <tr><th class="bigth" colspan="2">Query Parameters</th></tr>
        <tr><th>Parameter</th><th>Value</th></tr>
        <?php
        foreach ($_GET as $key => $value) {
          echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>

      <?php
      }
      ?>

      <?php
      if (count($_POST) > 0) {
      ?>
        <tr><th class="bigth" colspan="2">Post Parameters</th></tr>
        <tr><th>Parameter</th><th>Value</th></tr>

        <?php
        foreach ($_POST as $key => $value) {
          echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
      <?php
      }
      ?>
    </table>
  </body>
</html>
