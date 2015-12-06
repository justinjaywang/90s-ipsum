<!DOCTYPE html>
<html lang="en">
<?php
include 'words.php'; // $allWords, $ninetiesWords
include 'generate.php'; // $paragraphs
$palettes = array (
  array("Black", "LightSteelBlue"),
  array("WhiteSmoke", "OrangeRed"),
  array("LightYellow", "Indigo"),
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
  <meta name="author" content="Justin Jay Wang, a child of the 90s." />
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
  <div class="container container--wide nonFooter">
    <header class="header">
      <h4 class="header__title">90s Ipsum</h4>
    </header>
    <main class="main">
      <?php
      include 'main__title.php';
      ?>
      <?php
      include 'form.php'; // print text input
      ?>
      <section class="paragraphs">
        <?php
        include 'paragraphs.php';
        ?>
      </section>
    </main>
  </div>
  <div class="container container--wide">
    <footer class="footer">
      <p class="footer__note">Made by <a class="footer__link" href="http://justinjay.wang">JJW</a> &middot; <?php echo $fgColor; ?> on <?php echo $bgColor; ?></p>
    </footer>
  </div>
</body> 
</html>
