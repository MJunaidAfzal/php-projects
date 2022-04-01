<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php string</title>
</head>
<body>
    <?php
    echo "<h2>PHP STRLEN</h2>";
    echo "php strlen words ki length bataega <br>";
    echo strlen("My Name Is Junaid!");
    echo "<br>";

    echo "<h2>PHP STR_WORD_COUNT</h2>";
    echo "php str_word_count words count karega <br>";
    echo str_word_count("My Name Is Junaid!");
    echo "<br>";

    echo "<h2>PHP STRREV</h2>";
    echo "php strrev words ko reverse kardega <br>";
    echo strrev("My Name Is Junaid!");
    echo "<br>";

    echo "<h2>PHP STRPOS</h2>";
    echo "php strpos pehle word ki length bataega <br>";
    echo strpos("Hello world!","world");
    echo "<br>";

    echo "<h2>PHP STR_REPLACE</h2>";
    echo "php str_replace words ki length bataega <br>";
    echo str_replace("world", "Junaid", "Hello world!");
    echo "<br>";

   
    ?>

</body>
</html>