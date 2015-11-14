<?php
header("Content-type: text/css; charset: UTF-8");
?>
html {
  font-size: 20px;
  -webkit-user-select: none;     
  -moz-user-select: none;
  -ms-user-select: none;
}
@media only screen and (max-width: 767px) {
  html {
    font-size: 17px;
  }
}
body {
  margin: 0;
}
.wrap {
  margin: 3rem auto 6rem;
  width: 88.8889%;
  max-width: 36rem;
}
h1 {
  font-size: 3em;
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
  text-rendering: optimizeLegibility;
}
p {
  -webkit-user-select: text;     
  -moz-user-select: text;
  -ms-user-select: text;
}
input {
  outline: none;
  border: 2px solid;
  font-size: 0.75rem;
  padding: 0.3333rem;
  margin-top: 1rem;
  margin-bottom: 2rem;
}
input[type="text"] {
  background-color: inherit;
}
input[type="submit"] {
  padding-left: 1em;
  padding-right: 1em;
  cursor: pointer;
}
::-webkit-input-placeholder {
  color: inherit;
}
::-moz-placeholder {
  color: inherit;
}
:-moz-placeholder {
  color: inherit;
}
:-ms-input-placeholder {  
  color: inherit;
}
::-moz-selection {
  background-color: rgba(255,255,0,0.25);
}
::selection {
  background-color: rgba(255,255,0,0.25);
}
