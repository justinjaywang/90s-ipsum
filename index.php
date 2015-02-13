<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>90s ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="styles/style.php">
</head>
<body>
  <?php
  include 'words.php'; // $allWords, $ninetiesWords
  include 'generate.php'; // $paragraphs
  ?>
  <form method="post">
    <?php
    include 'title.php'; // print title
    ?>
    <?php
    include 'input.php'; // print text input
    ?>
  </form>
  <?php
  include 'print.php';
  ?>
</body> 
</html>