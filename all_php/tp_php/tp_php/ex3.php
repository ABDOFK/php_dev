<?php

function calculer_age($date_de_naissance)
{
    $n = strtotime($date_de_naissance);
    $aujordhui = time();
    $age = date("Y", $aujordhui) -
        date("Y", $n);

    if (date("md", $n) > date("md", $aujordhui)) {
        $age--;
    }
    return $age;
}


