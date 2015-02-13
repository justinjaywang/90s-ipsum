<?php
header("Content-type: text/css; charset: UTF-8");
$gray = "#888";
$lightgray = "#ccc";
$whiteish = "#eee";
$white = "fff";
$selectionBackground = "rgba(204,255,0,0.25)";
$selectionColor = "#666";
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
  background: <?php echo $white; ?>;
  color: <?php echo $gray; ?>;
  max-width: 680px;
  margin: 3em auto 4.5em;
  padding: 0 1.25em;
  text-rendering: optimizeLegibility;
  *zoom: 1;
}
body, input[type="text"] {
  font-size: 22px;
  line-height: 1.5em;
  font-family: helvetica, arial, sans-serif;
}
.title {
  font-size: inherit;
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
p {
  margin: 0 0 1.5em;
  word-break: hyphenate;
}
.paragraph span {
  -webkit-user-select: text;     
  -moz-user-select: text;
  -ms-user-select: text;
}
::-moz-selection { 
  background: <?php echo $selectionBackground; ?>;
  color: <?php echo $selectionColor; ?>;
}
::selection { 
  background: <?php echo $selectionBackground; ?>;
  color: <?php echo $selectionColor; ?>;
}
@media only screen and (max-width: 767px) {
  body, input[type="text"] {
    font-size: 18px;
    max-width: 540px;
  }
}