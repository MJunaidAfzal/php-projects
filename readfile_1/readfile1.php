<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>READ FILE</h1>

    <?php
    $myfile = fopen("array.txt", "a") or die("Unable to open file!");
    $txt = "Zohaib Afzal\n";
    fwrite($myfile, $txt);
    $txt = "Junaid Afzal\n";
    fwrite($myfile, $txt);
    $txt = "Jawaid Afzal\n";
    fwrite($myfile, $txt);
    $txt = "Ahmed Jahanzaib\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    ?>
    
</body>
</html>