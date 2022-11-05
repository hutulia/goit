<?php

$date = date('Y-m-d H:i:s');

echo <<<HTML
<!doctype>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Заголовок ТУТ БУДЕТ ВРЕМЯ</h1>
HTML;

$count = 7;

for($i = 1; $i <= $count ; $i++){
    echo "<p>{$i}) Текст текст текст</p>";
}

echo <<<HTML
    <script>
        setTimeout(()=>{
            setInterval(()=>{
                document.querySelector('h1').innerHTML = 'Заголовок '+(new Date().toISOString());
            },1000);
        },3000)
    </script>
    </body>
</html>
HTML;

