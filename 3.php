<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "flash buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "buzz<br>";
    } elseif ($i % 5 == 0) {
        echo "flash<br>";
    } else {
        echo $i . "<br>";
    }
}
?>