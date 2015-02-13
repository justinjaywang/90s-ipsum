<?php
$colors = array(
  "mediumpurple",
  "cornflowerblue",
  "fuchsia",
  "turquoise",
  "chartreuse",
  "deeppink",
  "deepskyblue",
  "aqua",
  "mediumspringgreen",
  "mediumorchid"
);
shuffle($colors);
$color = next($colors);
echo "<h1 class='title' style='color:" . $color . "'>90s ipsum</h1>";
?>