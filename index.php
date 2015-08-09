<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>90s Ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="author" content="Justin Wang, http://justinjaywang.com" />
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
  "seashell",
  "linen",
  "pink",
  "peachpuff",
  "cornsilk",
  "ivory",
  "lemonchiffon",
  "lightgoldenrodyellow",
  "mintcream",
  "azure",
  "honeydew",
  "lightcyan",
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
