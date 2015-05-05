<?php
$colors = array(
  "deeppink",
  "deepskyblue",
  "mediumslateblue",
  "mediumspringgreen"
);
shuffle($colors);
$color = next($colors);
echo "<h1 class='title' style='color:" . $color . "'>90s Ipsum</h1>";
?>