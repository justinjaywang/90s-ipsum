<?php
$paragraphsPlain = "";
foreach ($paragraphs as $p) {
  $paragraphsPlain .= $p . "\n";
}
echo "<article>";
foreach ($paragraphs as $p) {
  echo "<p>" . $p . "</p>";
}
echo "\n";
echo "</article>";
?>
