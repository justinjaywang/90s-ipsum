<!DOCTYPE html>
<html lang="en">
<?php
include 'words.php'; // $allWords, $ninetiesWords
include 'generate.php'; // $paragraphs
$palettes = array (
  array("LightSteelBlue", "Black"), 
  array("OrangeRed", "WhiteSmoke"),
  array("Indigo", "LightYellow"),
  array("Yellow", "DeepPink"),
  array("Aquamarine", "SteelBlue"),
  array("Teal", "Gainsboro"),
  array("DeepPink", "MidnightBlue"),
  array("Teal", "LightSteelBlue"),
  array("LightYellow", "OrangeRed"),
  array("White", "Indigo"),
  array("SlateBlue", "Yellow"),
  array("MidnightBlue", "Aquamarine"),
  array("LightSteelBlue", "Teal"),
  array("Indigo", "DeepPink"),
  array("Aquamarine", "Black"),
  array("Yellow", "DarkSlateBlue"),
  array("White", "Teal"),
  array("Black", "MediumSpringGreen"), 
  array("DeepPink", "Gainsboro"),
  array("White", "Black")
);
shuffle($palettes);
$palette = next($palettes);
$fgColor = $palette[0];
$bgColor = $palette[1];
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
