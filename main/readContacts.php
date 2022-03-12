<?php
$txt_file = fopen('C:\Users\Ishaan\Downloads\contacts.txt', 'r');
$a = 1;
while ($line = fgets($txt_file)) {
    echo ($a . " " . $line) . "<br>";
    $a++;
}
fclose($txt_file);
?>