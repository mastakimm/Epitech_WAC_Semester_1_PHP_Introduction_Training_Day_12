<?php

function cesar2($str)
{
    $str = strtolower($str);
    $resultat = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $caractere = $str[$i];

        if ($caractere == "z") {
            $resultat .= "b";
        } elseif ($caractere >= "a" && $caractere < "y") {
            $resultat .= chr(ord($caractere) + 2);
        } elseif ($caractere == "y") {
            $resultat .= "a";
        } else {
            $resultat .= $caractere;
        }
    }
    echo $resultat . PHP_EOL;
}
