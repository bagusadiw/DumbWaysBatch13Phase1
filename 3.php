<?php
function drawImage($input){
    if ($input%2){
        echo "<pre>";
        $floor = floor($input/2);
        $ceil = ceil($input/2);

        for ($i = 1; $i <= $floor; $i++) {
            for ($j = $i; $j <= $floor; $j++)
                echo "&nbsp;=";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;@");
            for ($j = $i; $j <= $floor; $j++)
                echo "&nbsp;=";
            echo "<br>";
        }

        for ($i = $ceil; $i > 0; $i--) {
            for ($j = $ceil - $i; $j > 0; $j--)
                echo "&nbsp;=";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;@");
            for ($j = $ceil - $i; $j > 0; $j--)
                echo "&nbsp;=";
            echo "<br>";
        }
        echo "</pre>";
    }else{
        echo "bilangan harus ganjil";
    }
}

drawImage(3);
drawImage(4);
drawImage(5);
drawImage(6);
drawImage(7);
?>