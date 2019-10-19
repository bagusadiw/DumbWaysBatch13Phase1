<?php
function hitungParkir($durasi){
    $batas = 3;
    $biaya1 = 2000;
    $biaya2 = 1000;
	if ($durasi <= $batas){
      $biaya = $durasi * $biaya1;
    }else{
      $overDurasi = $durasi - $batas;
      $biaya = ($batas * $biaya1) + ($overDurasi * $biaya2);
      if ($biaya <= 10000){
        $biaya = $biaya;
      }else{
        $biaya = 10000;
      }
    }
    echo "biaya $biaya <br>";
}

hitungParkir(1);
hitungParkir(3);
hitungParkir(4);
hitungParkir(10);

?>