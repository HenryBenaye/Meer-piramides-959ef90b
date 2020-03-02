<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <?php
    echo "<table border='0'><br />";

    for ($r = 0; $r < 10; $r++) {
        echo "</tr>" . PHP_EOL;

        for ($c = 0; $c <= $r; $c++) {

            echo '<td bgcolor= #000000 height=50px width=50px></td>';
        }
    }


    ?>


</body>

</html>