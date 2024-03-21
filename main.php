<?php

while (($num_lesmas = intval(fgets(STDIN))) !== false) {
    $velocidades = explode(" ", fgets(STDIN));
    $mais_veloz = max($velocidades);

    if ($mais_veloz < 10) {
        echo "1\n";
    } elseif ($mais_veloz < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}

?>