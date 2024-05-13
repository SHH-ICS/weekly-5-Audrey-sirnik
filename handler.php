<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-cyan.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Results</title>
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Your results</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Your results</span>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php
        $inputvalue = "";
        if (isset($_POST['inputvalue'])) {
          $inputvalue = $_POST['inputvalue'];
        }
        $result = 0;
        if ($inputvalue > 0 && is_numeric($inputvalue) && floor($inputvalue) == $inputvalue) {
          foreach (range(0, $inputvalue - 1) as $n) {
            $value = ((-1) ** $n) / (2 * $n + 1);
            $result = $result + $value;
            $n = $n + 1;
          }
          $result = $result * 4;
          echo "<h1>Your estimated value of Pi:" . $result . "</h1>\n";
        }
        else{
          echo "<h1>Error</h1>\n";
          echo "<h3>Please ensure the value you entered was a positive whole number</h3>\n";

        }

        ?>
        <!-- Accent-colored raised button -->
        <form name="myform" action="index.html" method="post">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
            Try again
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>