<?php
header("Content-type: text/css; charset: UTF-8");
$headerColor = "#00C3D9"; // blue
$inputBackground = "#ddd";
$inputText = "#777";
$placeholderText = "#999";
$clickFlagBackground = "#E1FF4C"; // yellow
$clickFlagText = "#777";
$paragraphHoverBackground = "#eee";
$paragraphClick = "#6B3D99"; // purple
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
  -webkit-transition: all 0.05s linear;
  -moz-transition: all 0.05s linear;
  transition: all 0.05s linear;
}
body {
  margin: 4em 0;
  background: #fff;
  color: #999;
}
.container {
  margin: 0 0;
  max-width: 940px;
  padding: 0 2em;
  *zoom: 1;
}
body, input[type="text"] {
  font-size: 17px;
  line-height: 1.6em;
  font-family: 'Inconsolata', monospace;
}
input[type="text"] {
  background: <?php echo $inputBackground; ?>;
  color: <?php echo $inputText; ?>;
  width: 0.6em;
  border: 0;
  margin: 0;
  padding: 0 0.5em;
  -webkit-appearance: none;
  outline: none;
}
.input-text {
  color: <?php echo $headerColor; ?>;
  cursor: default;
}
::-webkit-input-placeholder {
 color: <?php echo $placeholderText; ?>;
}
:-moz-placeholder {
 color: <?php echo $placeholderText; ?>;  
}
::-moz-placeholder {
 color: <?php echo $placeholderText; ?>;
}
:-ms-input-placeholder {  
 color: <?php echo $placeholderText; ?>;
}
.paragraphs {
  margin: 1em 0 0;
  cursor: pointer;
}
.copy-flag {
  position: fixed;
  top: 0em;
  right: 0em;
  color: <?php echo $clickFlagText; ?>;
  background: <?php echo $clickFlagBackground; ?>;
  padding: 0 0.5em;
  font-style: italic;
}
.clicked {
  background: <?php echo $paragraphHoverBackground; ?>;
  color: <?php echo $paragraphClick; ?>;
}
.hovered {
  background: <?php echo $paragraphHoverBackground; ?>;
}
@media only screen and (max-width: 480px) {
  body, input[type="text"], input[type="submit"] {
    font-size: 16px;
  }
}
@media only screen and (min-width: 481px) and (max-width: 768px)  {
  body, input[type="text"], input[type="submit"] {
    font-size: 18px;
  }
}
@media only screen and (min-width: 769px) {
  body, input[type="text"], input[type="submit"] {
    font-size: 20px;
  }
}