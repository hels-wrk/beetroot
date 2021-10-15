<?php
$text = '1a2b3c4b5d6e7f8g9h0';
for ($i = 0; $i < 10; $i++) {
    $text = str_replace($i, '', $text);
}
echo $text . PHP_EOL;