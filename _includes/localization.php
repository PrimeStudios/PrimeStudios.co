<?php
$lang = 'en';
if (file_exists('../language/'.$lang.'.json')) {
    $langJSON = json_decode(file_get_contents('../language/'.$lang.'.json'));
} else {
    $langJSON = json_decode(file_get_contents('../language/en.json'));
}
