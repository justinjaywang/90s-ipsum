<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>90s Ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="styles/style.php">
</head>
<?php
include 'words.php'; // $allWords, $ninetiesWords
include 'generate.php'; // $paragraphs
$fgColors = array(
  "red",
  "crimson",
  "mediumvioletred",
  "firebrick",
  "darkred",
  "maroon",
  "mediumseagreen",
  "green",
  "darkgreen",
  "slateblue",
  "darkslateblue",
  "blue",
  "mediumblue",
  "darkblue",
  "navy",
  "indigo",
  "magenta",
  "darkmagenta",
  "darkviolet",
  "blueviolet",
  "purple"
);
$bgColors = array(
  "lavenderblush",
  "mistyrose",
  "linen",
  "pink",
  "cornsilk",
  "lemonchiffon",
  "lightgoldenrodyellow",
  "yellow",
  "mintcream",
  "azure",
  "honeydew",
  "lightcyan",
  "aquamarine",
  "aliceblue",
  "ghostwhite",
  "lavender",
  "thistle"
);
shuffle($fgColors);
$fgColor = next($fgColors);
shuffle($bgColors);
$bgColor = next($bgColors);
echo "<body style='color:" . $fgColor . "; background-color:" . $bgColor . ";'>";
?>
  <header>
    <?php
    include 'title.php';
    ?>
    <?php
    include 'subtitle.php';
    ?>
  <?php
  include 'form.php'; // print text input
  ?>
  </header>
  <section>
    <?php
    include 'paragraphs.php';
    ?>
  </section>
</body> 
</html>
