<?php
header("Content-type: text/css; charset: UTF-8");
$darkGray = "#444";
$gray = "#ccc";
$white = "#fff";
$selectionBackground = "rgba(204,255,0,0.25)";
$selectionColor = $darkGray;
?>

html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -webkit-user-select: none;     
  -moz-user-select: none;
  -ms-user-select: none;
}
body {
  background: <?php echo $white; ?>;
  color: <?php echo $darkGray; ?>;
  width: 92%;
  max-width: 60em;
  margin: 2.8em auto 8.4em;
  font-size: 16px;
  font-family: helvetica, arial, sans-serif;
  font-weight: 400;
  line-height: 1.4;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.title, .subtitle {
  font-size: 2em;
  font-weight: 700;
  line-height: 1.2;
  cursor: default;
  letter-spacing: -0.02em;
}
.title {
  margin-bottom: 0;
}
.subtitle {
  color: <?php echo $gray; ?>;
}
input[type="text"] {
  background: <?php echo $white; ?>;
  color: inherit;
  font-family: inherit;
  font-size: inherit;
  font-weight: inherit;
  line-height: inherit;
  letter-spacing: inherit;
  text-rendering: optimizeLegibility;
  width: 14em;
  padding: 0;
  border: 0;
  margin: 0;
  -webkit-appearance: none;
  outline: none;
}
::-webkit-input-placeholder {
 color: inherit;
}
:-moz-placeholder {
 color: inherit;
}
::-moz-placeholder {
 color: inherit;
}
:-ms-input-placeholder {  
 color: inherit;
}
p {
  margin: 0 0 1.4em;
  word-break: hyphenate;
}
.paragraphInner {
  -webkit-user-select: text;     
  -moz-user-select: text;
  -ms-user-select: text;
  display: block;
  font-family: georgia, serif;
}
.paragraph:not(:first-of-type) .paragraphInner::first-line {
  font-weight: 700;
  font-family: helvetica, arial, sans-serif;
}
::-moz-selection { 
  background: <?php echo $selectionBackground; ?>;
  color: <?php echo $selectionColor; ?>;
}
::selection { 
  background: <?php echo $selectionBackground; ?>;
  color: <?php echo $selectionColor; ?>;
}
.paragraphs {
  -webkit-columns: 3;
  -moz-columns: 3;
  columns: 3;
}
@media only screen and (max-width: 767px) {
  body {
    font-size: 14px;
  }
}
@media only screen and (max-width: 480px) {
  .paragraphs {
    -webkit-columns: 1;
    -moz-columns: 1;
    columns: 1;
  }
}
@media only screen and (min-width: 481px) and (max-width: 960px) {
  .paragraphs {
    -webkit-columns: 2;
    -moz-columns: 2;
    columns: 2;
  }
}