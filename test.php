<?php
$json = file_get_contents("test.json");

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
        echo "<br>";
    } else {
        echo "$key => $val\n";
        echo "<br>";
    }
}

include('/PHP-Login/index.php');
?>
