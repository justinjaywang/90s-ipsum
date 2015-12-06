<!DOCTYPE html>
<html lang="en">
<?php
include 'words.php'; // $allWords, $ninetiesWords
include 'generate.php'; // $paragraphs
$palettes = array (
  array("Black", "LightSteelBlue"),
  array("WhiteSmoke", "OrangeRed"),
  array("LightYellow", "RebeccaPurple"),
  array("DarkSlateBlue", "PowderBlue"),
  array("LightCoral", "Yellow"),
  array("SteelBlue", "Aquamarine"),
  array("Gainsboro", "Teal"),
  array("MidnightBlue", "DeepPink"),
  array("LightCoral", "Black"),
  array("LightSteelBlue", "Teal"),
  array("OrangeRed", "LightYellow"),
  array("Indigo", "White"),
  array("PowderBlue", "SlateBlue"),
  array("Yellow", "SlateBlue"),
  array("Aquamarine", "MidnightBlue"),
  array("Teal", "LightSteelBlue"),
  array("DeepPink", "Indigo"),
  array("Black", "Aquamarine"),
  array("DarkSlateBlue", "Yellow"),
  array("MidnightBlue", "LightCoral"),
  array("Teal", "White"),
  array("DarkSlateBlue", "Aquamarine"),
  array("MediumSpringGreen", "Black"),
  array("Gainsboro", "DeepPink")
);
shuffle($palettes);
$palette = next($palettes);
$bgColor = $palette[0];
$fgColor = $palette[1];
?>
<head>
  <meta charset="utf-8">
  <title>90s Ipsum</title>
  <meta name="description" content="Dope filler text for your design project.">
  <meta name="author" content="Justin Wang, a child of the 90s." />
  <link rel="stylesheet" href="style.php">
  <style type="text/css">
    ::-moz-selection {
      background-color: <?php echo $fgColor; ?>;
      color: <?php echo $bgColor; ?>;
    }
    ::selection {
      background-color: <?php echo $fgColor; ?>;
      color: <?php echo $bgColor; ?>;
    }
  </style>
</head>
<?php
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
    <article>
      <?php
      include 'paragraphs.php';
      ?>
    </article>
  </div>
</body> 
</html>
