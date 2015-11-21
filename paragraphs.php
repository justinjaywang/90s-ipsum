<?php
$paragraphsPlain = "";
foreach ($paragraphs as $p) {
  $paragraphsPlain .= $p . "\n";
}
foreach ($paragraphs as $p) {
  echo "<p><span>" . $p . "</span></p>";
}
?>
