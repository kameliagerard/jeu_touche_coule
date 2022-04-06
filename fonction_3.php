<?php
function touche_coule($maChar, $monInt)
{
    $essai = "$maChar" . "$monInt";
    if (preg_match("#^[a-j]$#", $maChar) and preg_match("#^([1-9]|(10))$#", $monInt)) {
        $plan = array('f3', 'f4', 'f5', 'i5', 'i6', 'c9', 'd9', 'e9', 'f9');
        if (in_array($essai, $plan)) {
            $retour = "Tu as touché un bateau !\n";
        } else {
            $retour = "C'est loupé !\n";
        }
    } else {
        $retour = "Tu es hors-jeu !\n";
    }
    return $retour;
}
echo touche_coule('c', '9');
