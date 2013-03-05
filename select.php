<?php
$numParagraphs = intval($_POST["p"]);
echo '<select name="p" onchange="this.form.submit()">';
echo '<option value="">¶</option>';
for ($i=1; $i<=12; $i++) {
  if ($i==$numParagraphs) {
    $s = ' selected';
  } else {
    $s = ' ';
  }
  echo '<option value="' . $i . '"' . $s . '>' . $i . '</option>';
}
echo "</select>";
?>