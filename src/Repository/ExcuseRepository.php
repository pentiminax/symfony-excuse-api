<?php

namespace App\Repository;

class ExcuseRepository
{
    private $excuses = [
        "Mon chat a marché sur mon clavier et a fermé tous mes onglets.",
        "J’ai confondu la date avec celle de mon anniversaire… en avance de 3 mois.",
        "Ma box internet a cru qu’on était en 1998 et a décidé de faire un bruit de modem.",
        "Je me suis perdu en allant du salon à mon bureau.",
        "Mon voisin m’a demandé de l’aide pour attraper son iguane. Je n’ai pas pu refuser.",
        "Mon café a explosé dans le micro-ondes. J’ai dû gérer l’apocalypse en cuisine.",
        "Mon réveil a sonné… mais en mode silencieux.",
        "Une mise à jour Windows a commencé juste quand j’allais cliquer sur 'envoyer'.",
        "J’ai lu ‘urgent’ mais mon cerveau a compris ‘optionnel’.",
        "J’étais trop concentré à résoudre un bug que j’ai créé… en essayant de corriger un bug.",
    ];

    public function getRandomExcuse(): string
    {
        return $this->excuses[array_rand($this->excuses)];
    }
}