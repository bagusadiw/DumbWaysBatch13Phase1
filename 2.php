<?php
function hitungKembalian($total, $uang){
    $sisa = $uang - $total;
    $K50 = floor($sisa/50000);
    $mod50 = $sisa%50000;

    $K20 = floor($mod50/20000);
    $mod20 = $mod50%20000;

    $K10 = floor($mod20/10000);
    $mod10 = $mod20%10000;

    $K5 = floor($mod10/5000);
    $mod5 = $mod10%5000;

    echo "$K50 x 50000 <br>";
    echo "$K20 x 20000 <br>";
    echo "$K10 x 10000 <br>";
    echo "$K5 x 5000 <br>";
    echo "$mod5 disumbangkan <br>";
}
hitungKembalian(110500, 200000);
?>