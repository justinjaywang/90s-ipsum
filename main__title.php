<?php
$numParagraphs = intval($_POST["p"]);
$isEmpty = $numParagraphs==null;
$greetings = array (
  "Sup",
  "Yo",
  "What up"
);
$people = array (
  "dawg",
  "home skillet",
  "homie",
  "dude",
  "hottie",
  "fool",
  "G",
);
$adjectives = array(
  "fly",
  "mad",
  "phat",
  "dope",
  "sick",
  "fresh",
  "rad",
  "ill"
);
if ($isEmpty) {
  // empty, 0, or any integer
  shuffle($greetings);
  shuffle($people);
  $greeting = next($greetings) . " " . next($people) . "." . $startInput;
} else {
  shuffle($adjectives);
  $adjective = next($adjectives);
  if ($numParagraphs==1) {
    $greeting = $numParagraphs . " paragraph of " . $adjective . " filler text.";
  } else {
    $greeting = $numParagraphs . " paragraphs of " . $adjective . " filler text.";
  }
}
echo "<h1 class='main__title'>" . $greeting . "</h1>";
?>
