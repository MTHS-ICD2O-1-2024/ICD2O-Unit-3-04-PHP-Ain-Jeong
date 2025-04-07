<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Convert Fahrenheit to Celsius, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Convert Fahrenheit to Celsius, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Convert Fahrenheit to Celsius, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/thermometer-icon.png" alt="Thermometer image" width="500" />
      </div>
      <br />
      <div class="page-content-heading">Formula</div>
      <div class="page-content-formula">°C = (°F - 32) * (5 / 9)</div>
      <div class="page-content-guide">Please enter integers for Fahrenheit:</div>
      <div class="page-content-php">
        <form action="./answer.php" method="GET">
          <label class="page-content">Fahrenheit: </label>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="temperature-in-fahrenheit" />
            <label class="mdl-textfield__label" for="temperature-in-fahrenheit">temperature in fahrenheit (°F)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <label class="page-content">°F </label>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Convert
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
