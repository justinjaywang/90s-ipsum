<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>’90s Ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  
  <!-- CSS -->
  <link rel="stylesheet" href="styles/style.php">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>

  <!-- JavaScript -->
  <script type="text/javaScript" src="http://code.jquery.com/jquery-1.9.1.js" charset="utf-8"></script>
  <script type="text/javaScript" src="scripts/clipboard.js" charset="utf-8"></script>
  <script type="text/javaScript" src="scripts/main.js" charset="utf-8"></script>
</head>
<body>
  <?php
  include 'words.php'; // $allWords, $ninetiesWords
  include 'generate.php'; // $paragraphs
  ?>
  <span class="copy-flag"></span>
  <div class="container">
    <form action="" method="post">
      <div class="input-text">
        <?php
        include 'input.php'; // print text input
        ?>
      </div>
    </form>
    <?php
    include 'print.php';
    ?>
  </div>
</body> 
</html>