<?php
for ($a = 1; $a <= 10; $a++) {
    echo "<br>Tabuáda do $a:";
    for ($i = 0; $i < 11; $i++) {
        echo "$a X $i = " . ($a * $i) . "<br>";
    }
}
?>