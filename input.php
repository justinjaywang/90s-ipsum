<?php
$numParagraphs = intval($_POST["p"]); 
$adjectives = array(
  "the illest",
  "fly",
  "mad",
  "the phattest",
  "dope",
  "sick",
  "fresh"
);
$input = "<input type='text' name='p' placeholder='' autofocus='autofocus' maxlength='1'>";
if ($numParagraphs==null) {
  // empty, 0, or any integer
  $greeting = "Number of paragraphs to generate &rarr; " . $input;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = "Generated " . $numParagraphs . " paragraph of " . $adjective . " filler text. Try again &rarr; " . $input;
  } else {
    $greeting = "Generated " . $numParagraphs . " paragraphs of " . $adjective . " filler text. Try again &rarr; " . $input;
  }
  
}
echo $greeting;
?>