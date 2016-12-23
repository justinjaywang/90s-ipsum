<?php
// reads from newline-delimited nineties.txt file to generate an array
$ninetiesName = "nineties.txt";
$ninetiesFile = fopen($ninetiesName, "r");
$ninetiesContents = fread($ninetiesFile, filesize($ninetiesName));
$delimiter = "\n";
$ninetiesWords = explode($delimiter, $ninetiesContents);
$allWords = $ninetiesWords;
fclose($ninetiesFile);
?>