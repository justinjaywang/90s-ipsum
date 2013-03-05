<?php
$paragraphsPlain = "";
foreach ($paragraphs as $p) {
  $paragraphsPlain .= $p . "\n";
}
echo "<div id='copy-button' class='paragraphs' data-clipboard-text='" . $paragraphsPlain . "' title=''>";
foreach ($paragraphs as $p) {
  echo "<p class='paragraph'><span>" . $p . "</span></p>";
}
echo "\n";
echo "</div>";
?>