<?php
$numParagraphs = intval($_POST["p"]);
$isEmpty = $numParagraphs==null;
$adjectives = array(
  "fly",
  "mad",
  "phat",
  "dope",
  "sick",
  "fresh",
  "rad",
  "the illest"
);
if ($isEmpty) {
  // empty, 0, or any integer
  $greeting = "Dope filler text for your design project." . $startInput;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = $numParagraphs . " paragraph of " . $adjective . " filler text.";
  } else {
    $greeting = $numParagraphs . " paragraphs of " . $adjective . " filler text.";
  }
}
echo "<h1>90s Ipsum—" . $greeting . "</h1>";
?>
