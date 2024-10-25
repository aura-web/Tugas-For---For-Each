<?php
// 1 + 3 + 5 + 7 + 9 + 11 + 13 + 15 + 17 + 19
$sum = 0;
for ($i = 1; $i <= 19; $i += 2) {
    $sum += $i;
}
echo "Hasil penjumlahan: " . $sum;
?>
