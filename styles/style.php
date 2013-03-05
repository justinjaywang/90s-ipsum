<?php
header("Content-type: text/css; charset: UTF-8");
$blue = "#2EC7E5";
$yellow = "#E1FF33";
$purple = "#6B3D99";
$gray = "#777";
$whiteish = "#eee";
?>

html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-user-select: none;     
  -moz-user-select: none;
  -ms-user-select: none;
}
* {
  -webkit-transition: all 0.01s linear;
  -moz-transition: all 0.01s linear;
  transition: all 0.01s linear;
}
body {
  margin: 1.5em 0 4.5em;
  background: #fff;
  color: <?php echo $gray; ?>;
  text-rendering: optimizeLegibility;
}
.container {
  margin: 0 auto;
  max-width: 31em;
  padding: 0 1.5em;
  *zoom: 1;
}
body, select {
  font-size: 24px;
  line-height: 1.5em;
  font-family: helvetica, arial, sans-serif;
}
.paragraphs {
  cursor: pointer;
}
.paragraph {
  margin: 1em 0 0;
}
.paragraph:first-child {
  margin-top: 1.5em;
}
.copy-flag {
  position: fixed;
  top: 0em;
  right: 0em;
  color: <?php echo $gray; ?>;
  background: <?php echo $yellow; ?>;
  padding: 0 0.5em;
  font-style: italic;
}
.clicked {
  background: <?php echo $whiteish; ?>;
  color: <?php echo $purple; ?>;
}
.hovered {
  background: <?php echo $whiteish; ?>;
}
@media only screen and (max-width: 767px) {
  body, input[type="text"], input[type="submit"] {
    font-size: 22px;
  }
}