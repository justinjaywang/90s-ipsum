<?php
$paragraphsPlain = "";
foreach ($paragraphs as $p) {
  $paragraphsPlain .= $p . "\n";
}
foreach ($paragraphs as $p) {
  echo "<p class='paragraph'><span>" . $p . "</span></p>";
}
?>
