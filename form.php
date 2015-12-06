<?php
$startInput = "<input class='input' type='text' name='p' style='color:" . $fgColor . ";' placeholder='Enter a number' autofocus='autofocus' maxlength='1'>";
$tryAgainInput = "<input class='input' type='text' name='p' style='color:" . $fgColor . ";' placeholder='Try again' maxlength='2'>";
if ($isEmpty) {
  $input = $startInput;
} else {
  $input = $tryAgainInput;
}
echo "<form class='form' method='post'>";
echo $input;
echo "<input class='input' type='submit' style='background-color:" . $fgColor . "; color:" . $bgColor . "; border-color:" . $fgColor . "' value='Boo-ya'>";
echo "</form>";
?>
