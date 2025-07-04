<?php

namespace App;

class Calculatrice
{
public function calculer(float $nombre1, float $nombre2, string $operation)
{
    if ($operation === '+') {
        return $nombre1 + $nombre2;
    }
    if ($operation === '-') {
        return $nombre1 - $nombre2;
    }
    if ($operation === '*') {
        return $nombre1 * $nombre2;
    }
    if ($operation === '/') {
        if ($nombre2 == 0) {
            return 'Erreur : division par zéro';
        }
        return $nombre1 / $nombre2;
    }

    return 'Opération inconnue';
}


}
