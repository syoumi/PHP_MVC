<?php

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id===null || $id === false || !file_exists("models/game_$id.php")) {
    exit();
}

// - Inclure les fichiers avec les noms des équipes
include "models/team_names.php";

//   et les informations liées au match choisi par le client.
include "models/game_$id.php";

// calculer le résultat total du match
$result = [0, 0];

foreach ($game['goals'] as $value){
    $result[$value['team']]++;
}

$title = "Match N° " . $id;

// - Choisir la vue "team".
$view = 'game';

// - Générer la page.
include "views/page.php";