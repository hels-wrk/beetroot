<?php
echo "Угадайте число от 1 до 100". PHP_EOL;
echo "Напиши 'start' для начала игры" . PHP_EOL;

if ($argv[1] == "start") {
    $ourNumberFirst = rand(1, 100);
    $fileWriting = fopen("baseForGame.txt", "w");
    fwrite($fileWriting, $ourNumberFirst);
    fclose($fileWriting);
}
$ourNumber = fgets(fopen("baseForGame.txt", "r"));

echo $ourNumber . PHP_EOL;
if ($argv[1] < $ourNumber) {
    echo "Ваше число меньше нашего" . PHP_EOL;
}  elseif ($argv[1] > $ourNumber) {
    echo "Ваше число больше нашего" . PHP_EOL;
} elseif ($argv[1] == $ourNumber) {
    echo "Ты выиграл!!" . PHP_EOL;
}

