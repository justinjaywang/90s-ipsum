<?php
header("Content-type: text/css; charset: UTF-8");
$blue = "#2EC7E5";
$yellow = "#E1FF33";
$purple = "#6B3D99";
$gray = "#888";
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
  margin: 2.5em 0 3.5em;
  background: #fff;
  color: <?php echo $gray; ?>;
  text-rendering: optimizeLegibility;
}
.container {
  /*margin: 0 auto;*/
  max-width: 860px;
  padding: 0 1.5em;
  *zoom: 1;
}
body, input[type="text"] {
  font-size: 26px;
  line-height: 1.5em;
  font-family: helvetica, arial, sans-serif;
}
input[type="text"] {
  background: <?php echo $whiteish; ?>;
  color: <?php echo $gray; ?>;
  width: 1.5em;
  border: 0;
  margin: 0;
  -webkit-appearance: none;
  outline: none;
}
input[type="text"]:focus {
  background: #fff;
}
.input-text {
  color: <?php echo $blue; ?>;
  cursor: default;
}
::-webkit-input-placeholder {
 color: <?php echo $gray; ?>;
}
:-moz-placeholder {
 color: <?php echo $gray; ?>;  
}
::-moz-placeholder {
 color: <?php echo $gray; ?>;
}
:-ms-input-placeholder {  
 color: <?php echo $gray; ?>;
}
.paragraphs {
  margin: 2.5em 0 0;
  cursor: pointer;
}
.paragraph {
  margin: 1.5em 0 0;
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