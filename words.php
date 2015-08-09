<?php
// reads from comma-delimited latin.txt and nineties.txt files to generate an array
$latinName = "latin.txt";
$ninetiesName = "nineties.txt";
$latinFile = fopen($latinName, "r");
$ninetiesFile = fopen($ninetiesName, "r");
$latinContents = fread($latinFile, filesize($latinName));
$ninetiesContents = fread($ninetiesFile, filesize($ninetiesName));
$delimiter = "\n";
$latinWords = explode($delimiter, $latinContents);
$ninetiesWords = explode($delimiter, $ninetiesContents);
$allWords = array_merge($latinWords, $ninetiesWords);
fclose($latinFile);
fclose($ninetiesFile);
?>