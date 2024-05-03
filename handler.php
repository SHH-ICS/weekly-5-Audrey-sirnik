<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-cyan.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  $inputvalue = "";
  if (isset($_POST['inputvalue'])) {
    $inputvalue = $_POST['inputvalue'];
  }
  foreach (range(0, $inputvalue - 1) as $n) {
    $value = ((-1) ** $n) / (2 * $n + 1);
    $result = $result + $value;
    $n = $n + 1;
  }
  $result = $result * 4;

  echo "<h1>My Program</h1>\n";
  echo "<p>My Variable is = " . $myVariable . "</p>\n";
  ?>

</body>
</html>