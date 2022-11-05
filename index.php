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

for($i = 1; $i <= 100 ; $i++){
    echo "<p>{$i})Текст текст текст</p>";
}

echo <<<HTML
    </body>
</html>
HTML;

