<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id===null || $id === false || !file_exists("models/team_$id.php")) {
    exit();
}

// - Inclure les fichiers avec les noms des équipes
include "models/team_names.php";

//   et les informations liées à l'équipe choisie par le client.
include "models/team_$id.php";

$title = $team_names[$id];

// - Choisir la vue "team".
$view = 'team';

// - Générer la page.
include "views/page.php";
