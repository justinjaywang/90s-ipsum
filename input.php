<?php
$numParagraphs = intval($_POST["p"]); 
$adjectives = array(
  "the illest",
  "fly",
  "mad",
  "phat",
  "dope",
  "sick",
  "fresh"
);
$input = "<input type='text' name='p' placeholder='' autofocus='autofocus' maxlength='1'>";
if ($numParagraphs==null) {
  // empty, 0, or any integer
  $greeting = "Number of paragraphs (1&ndash;9) to generate: " . $input;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = "Generated " . $numParagraphs . " paragraph of " . $adjective . " filler text.<br>Try again: " . $input;
  } else {
    $greeting = "Generated " . $numParagraphs . " paragraphs of " . $adjective . " filler text.<br>Try again: " . $input;
  }
}
echo $greeting;
?>