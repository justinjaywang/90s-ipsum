<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>90s Ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="author" content="Justin Wang, http://justinjaywang.com" />
  <link rel="stylesheet" href="style.php">
</head>
<?php
include 'words.php'; // $allWords, $ninetiesWords
include 'generate.php'; // $paragraphs
$fgColors = array(
  "mediumvioletred",
  "firebrick",
  "darkred",
  "darkgreen",
  "darkslateblue",
  "blue",
  "mediumblue",
  "darkblue",
  "navy",
  "indigo",
  "darkmagenta",
  "darkviolet",
  "purple"
);
$bgColors = array(
  "lavenderblush",
  "mistyrose",
  "seashell",
  "linen",
  "peachpuff",
  "cornsilk",
  "ivory",
  "lemonchiffon",
  "lightgoldenrodyellow",
  "mintcream",
  "azure",
  "honeydew",
  "aliceblue",
  "ghostwhite",
  "lavender",
  "thistle",
  "whitesmoke"
);
shuffle($fgColors);
$fgColor = next($fgColors);
shuffle($bgColors);
$bgColor = next($bgColors);
echo "<body style='color:" . $fgColor . "; background-color:" . $bgColor . ";'>";
?>
  <div class="wrap">
    <header>
      <?php
      include 'title.php';
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
  </div>
</body> 
</html>
