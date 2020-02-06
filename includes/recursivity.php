<?php
function adjustRecursivity()
{
    global $pageLevel;
    $recursivityLevel = 0;
    $output = '';
    while ($recursivityLevel < $pageLevel) {
        $output .= '../';
        $recursivityLevel++;
    }
    return $output;
}
?>
