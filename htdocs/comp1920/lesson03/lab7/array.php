<?php
function createHtmlSelect($selectItems) {
  $theSelect = "<select name=\"dynamicSelect\">";

  foreach($selectItems as $aSelectItem) {
    $theSelect = $theSelect . "<option>" . strtoupper($aSelectItem) . "</option>";
  }

  $theSelect = $theSelect . "</select>";

  return $theSelect;
}
?>

