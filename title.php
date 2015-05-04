<?php
$colors = array(
  "lime",
  "aqua",
  "blue",
  "blueviolet",
  "violetred"
);
shuffle($colors);
$color = next($colors);
echo "<h1 class='title' style='color:" . $color . "'>90s Ipsum</h1>";
?>