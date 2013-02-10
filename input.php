<?php
$numParagraphs = intval($_POST["p"]); 
$greetings = array(
  "Sup ",
  "Yo "
);
$person = array(
  "dawg. ",
  "homie. ",
  "dude. "
);
$success = array(
  "Boo ya! Generated ",
  "Mad props! Generated ",
  "Phat! Generated ",
  "Word up! Generated ",
  "Keepin’ it real with "
);
$input = "<input type='text' name='p' placeholder='#' autofocus='autofocus' maxlength='1'>";
if ($numParagraphs==null) {
  // empty, 0, or any integer
  shuffle($greetings);
  shuffle($person);
  $greetingStart = next($greetings) . next($person);
  $greeting = $greetingStart . "Enter number of paragraphs to generate and press return: " . $input;
} else {
  shuffle($success);
  $greetingStart = next($success);
  if ($numParagraphs==1) {
    $greeting = $greetingStart . $numParagraphs . " paragraph of ’90s ipsum. Try again: " . $input;
  } else {
    $greeting = $greetingStart . $numParagraphs . " paragraphs of ’90s ipsum. Try again: " . $input;
  }
  
}
echo $greeting;
?>