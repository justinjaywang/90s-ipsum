<?php
$numParagraphs = intval($_POST["p"]); 
$commaOrPeriod = array(".", ",");

function generateIpsum($numParagraphs) {
  // Prints paragraphs of filler text.
  // if ($numParagraphs==null) {
  //   $numParagraphs = 3;
  // }
  $paragraphs = array();
  for ($i=1; $i<=$numParagraphs; $i++) {
    $paragraph = generateParagraph();
    $paragraphs[] = $paragraph;
  }
  return $paragraphs;
}
function generateParagraph() {
  // Returns paragraph.
  global $allWords;
  $numPhrases = mt_rand(6,8);
  shuffle($allWords);
  $paragraph = generatePhrases($allWords, $numPhrases, "", ".");
  // echo "<p class='paragraph'>" . $paragraph . "</p>";
  return $paragraph;
}
function generatePhrases($words, $numPhrases, $phrasesSoFar, $currDelimiter) {
  // Returns phrases specified; iterates recursively
  global $commaOrPeriod;
  if ($numPhrases==0) {
    // base case, replace last character with "." no matter what
    $phrases = substr_replace($phrasesSoFar, ".", -2);
    return $phrases;
  } else {
    $numWords = mt_rand(4,6);
    if ($currDelimiter==".") {
      // start of new sentence, capitalize first word
      $phrasesSoFar .= ucfirst(next($words)) . " ";
      for ($i=2; $i<$numWords; $i++) {
        $phrasesSoFar .= next($words) . " ";
      }
      shuffle($commaOrPeriod);
      $currDelimiter = $commaOrPeriod[0];
      $phrasesSoFar .= next($words) . $currDelimiter . " ";
      return generatePhrases($words, $numPhrases-1, $phrasesSoFar, $currDelimiter);
    } else {
      // delimiter was comma, do not capitalize first word
      for ($i=1; $i<$numWords; $i++) {
        $phrasesSoFar .= next($words) . " ";
      }
      $phrasesSoFar .= next($words) . ". ";
      return generatePhrases($words, $numPhrases-1, $phrasesSoFar, ".");
    }
  }
}

$paragraphs = generateIpsum($numParagraphs);
?>
