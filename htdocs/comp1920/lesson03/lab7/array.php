<?php
/**
 * array.php
 *
 * this is a file that is used in COMP1920 lab7
 *
 * Author:  John Elash
 * Date:   May 14, 2015
 *
 */

function createHtmlSelect($selectItems) {
  $theSelect = "<select name=\"dynamicSelect\">";

  foreach($selectItems as $aSelectItem) {
    $theSelect = $theSelect . "<option>" . strtoupper($aSelectItem) . "</option>";
  }

  $theSelect = $theSelect . "</select>";

  return $theSelect;
}
?>

