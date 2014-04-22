<?php
header("Content-type: text/css; charset: UTF-8");
$yellow = "#E1FF33";
$purple = "#6B3D99";
$darkergray = "#777";
$gray = "#888";
$lightgray = "#ccc";
$whiteish = "#eee";
$white = "fff";
?>

html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-user-select: none;     
  -moz-user-select: none;
  -ms-user-select: none;
}
body {
  margin: 1.5em 0 4.5em;
  background: #fff;
  color: <?php echo $gray; ?>;
  text-rendering: optimizeLegibility;
}
.container {
  margin: 0 auto;
  max-width: 660px;
  padding: 0 1.25em;
  *zoom: 1;
}
body, input[type="text"] {
  font-size: 24px;
  line-height: 1.5em;
  font-family: helvetica, arial, sans-serif;
}
.title {
  color: <?php echo $purple; ?>;
  font-weight: 700;
  margin-bottom: 0;
}
.title, .input-text {
  cursor: default;
}
.input-text {
  color: <?php echo $lightgray; ?>;
}
input[type="text"] {
  background: <?php echo $whiteish; ?>;
  color: <?php echo $gray; ?>;
  width: 0.6em;
  padding: 0 0.5em;
  border: 0;
  margin: 0;
  -webkit-appearance: none;
  outline: none;
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
  cursor: pointer;
}
.paragraph {
  margin: 1.5em 0 0;
  word-break: hyphenate;
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
  color: <?php echo $darkergray; ?>;
}
.hovered {
  background: <?php echo $whiteish; ?>;
  color: <?php echo $darkergray; ?>;
}
@media only screen and (max-width: 767px) {
  body, input[type="text"] {
    font-size: 18px;
  }
  .container {
    max-width: 432px;
  }
}