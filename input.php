<?php
$numParagraphs = intval($_POST["p"]); 
$greetings = array(
  "Sup ",
  "Yo "
);
$person = array(
  "dawg. ",
  "homie. ",
  "dude. ",
  "playa. "
);
$adjectives = array(
  "the illest",
  "fly",
  "mad",
  "the phattest",
  "dope",
  "sick",
  "the freshest"
);
$input = "<input type='text' name='p' placeholder='#' autofocus='autofocus' maxlength='1'>";
if ($numParagraphs==null) {
  // empty, 0, or any integer
  shuffle($greetings);
  shuffle($person);
  $greetingStart = next($greetings) . next($person);
  $greeting = $greetingStart . "Enter number of paragraphs to generate and press return: " . $input;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = "Generated " . $numParagraphs . " paragraph of " . $adjective . " filler text. Try again: " . $input;
  } else {
    $greeting = "Generated " . $numParagraphs . " paragraphs of " . $adjective . " filler text. Try again: " . $input;
  }
  
}
echo $greeting;
?>