<?php
// php functie die een naam omdraaid.

function revert($tekst) {
    for($i=strlen($tekst)-1, $j = 0; $j < $i; $i--, $j++)
    {
        $temp = $tekst[$i];
        $tekst[$i] = $tekst[$j];
        $tekst[$j] = $temp;
    }
    return $tekst;
}

// code printen.
$tekst = "Mustafa";
echo (revert($tekst));
?>