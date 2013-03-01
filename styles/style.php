<?php
header("Content-type: text/css; charset: UTF-8");
$blue = "#00C3D9";
$yellow = "#E5FF00";
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
  margin: 3em 0;
  background: #fff;
  color: <?php echo $gray; ?>;
}
.container {
  /*margin: 0 auto;*/
  max-width: 800px;
  padding: 0 1.5em;
  *zoom: 1;
}
body, input[type="text"] {
  font-size: 20px;
  line-height: 1.5em;
  font-family: 'Inconsolata', monospace;
}
input[type="text"] {
  background: <?php echo $lightgray; ?>;
  color: <?php echo $gray; ?>;
  width: 2em;
  border: 0;
  margin: 0;
  -webkit-appearance: none;
  outline: none;
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
  margin: 3em 0 0;
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
    font-size: 18px;
  }
}
@media only screen and (min-width: 768px) {
  body, input[type="text"], input[type="submit"] {
    font-size: 20px;
  }
}