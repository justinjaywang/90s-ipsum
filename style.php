<?php
header("Content-type: text/css; charset: UTF-8");
?>
@import url(https://fonts.googleapis.com/css?family=Cousine);
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 14px;
  -webkit-user-select: none;     
  -moz-user-select: none;
  -ms-user-select: none;
}
body {
  margin: 0;
  cursor: default;
  -webkit-font-smoothing: antialiased;
  -font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  min-height: 100vh; // for sticky footer
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-flex-wrap: nowrap;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-justify-content: flex-start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-align-content: stretch;
  -ms-flex-line-pack: stretch;
  align-content: stretch;
  -webkit-align-items: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
}
a {
  color: inherit;  
}
.nonFooter {
  -webkit-order: 0; // for sticky footer
  -ms-flex-order: 0;
  order: 0;
  -webkit-flex: 1 1 auto;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-align-self: auto;
  -ms-flex-item-align: auto;
  align-self: auto;
}
.container {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  padding-left: 3.75%;
  padding-right: 3.75%;
}
.container--narrow {
  max-width: 37rem;
}
.container--wide {
  max-width: 1200px;
}
.main {
  zoom: 1;
}
.form {
  width: 100%;
  max-width: 18.5rem;
  position: relative;
  margin-bottom: 2.8em;
  float: left;
}
.paragraphs {
  width: 50%;
  margin-bottom: 3em;
  margin-left: auto;
}
.main__title {
  font-size: 5em;
  font-family: sans-serif;
  font-weight: 700;
  text-rendering: optimizeLegibility;
  letter-spacing: -0.015em;
  line-height: 1.1;
  margin-top: 1em;
  margin-bottom: 1em;
}
.header__title,
.paragraph,
.input,
.footer {
  font-family: 'Cousine', monospace;
  font-weight: 400;
  font-size: 1rem;
  line-height: 1.4;
}
.paragraph {
  margin-top: 0;
  margin-bottom: 1.4em;
}
.header__title,
.footer__note {
  margin-top: 1.4em;
  margin-bottom: 1.4em;
}
.paragraph span {
  -webkit-user-select: text;     
  -moz-user-select: text;
  -ms-user-select: text;
}
.input {
  outline: none;
  border: 2px solid;
  padding: 0.4rem;
}
input[type="text"] {
  background-color: inherit;
  width: 100%;
}
input[type="submit"] {
  padding-left: 1em;
  padding-right: 1em;
  cursor: pointer;
  position: absolute;
  right: 0;
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
@media only screen and (max-width: 768px) {
  html {
    font-size: 14px;
  }
  .main__title {
    font-size: 3em;
  }
  .form {
    float: none;
  }
  .paragraphs {
    margin-bottom: 3em;
    margin-left: 0;
    width: 100%;
  }
}
