<?php
$startInput = "<input type='text' name='p' placeholder='Number of paragraphs' autofocus='autofocus' maxlength='1'>";
$tryAgainInput = "<input type='text' name='p' placeholder='Try again' maxlength='2'>";
if ($isEmpty) {
  $input = $startInput;
} else {
  $input = $tryAgainInput;
}
echo "<form class='form' method='post'>";
echo $input;
echo "<input type='submit' value='Boo-ya'>";
echo "</form>";
?>
