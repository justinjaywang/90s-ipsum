<?php
$numParagraphs = intval($_POST["p"]); 
$adjectives = array(
  "fly",
  "mad",
  "phat",
  "dope",
  "sick",
  "fresh",
  "rad"
);
$startInput = "<input type='text' name='p' placeholder='Number of paragraphs ↩' autofocus='autofocus' maxlength='1'>";
$tryAgainInput = "<input type='text' name='p' placeholder='Try again ↩' maxlength='1'>";
if ($numParagraphs==null) {
  // empty, 0, or any integer
  $greeting = "Dope filler text for your design project.<br>" . $startInput;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = $numParagraphs . " paragraph of " . $adjective . " filler text.<br>" . $tryAgainInput;
  } else {
    $greeting = $numParagraphs . " paragraphs of " . $adjective . " filler text.<br>" . $tryAgainInput;
  }
}
echo "<p class='subtitle'>";
echo $greeting;
echo "</p>";
?>