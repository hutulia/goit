<?php

$date = date('Y-m-d H:i:s');

echo <<<HTML
<!doctype>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Заголовок {$date}</h1>
HTML;

$count = 5;

for($i = 1; $i <= $count ; $i++){
    echo "<p>{$i}) Текст текст текст</p>";
}

echo <<<HTML
    </body>
</html>
HTML;

