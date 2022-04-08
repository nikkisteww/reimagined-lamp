<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
for ($x = 1; $x <= 100; $x++) {

if ($x % 15 == 0) {
echo " $x Blueberry<br>";
} elseif ($x % 5 ==0) {
echo "$x Berry<br>";
} elseif ($x % 3 ==0) {
echo "$x Blue<br>";
}
else
echo "$x<br>";
}
        ?>
    </body>
</html> 
