<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 01:20 م
 */

class Soccer_model
{
    public function ranking() {
        include 'models/ranking.php';
        return $ranking;
    }

    public function team_names() {
        include 'models/team_names.php';
        return $team_names;
    }

    public function team($id) {
        if (!file_exists("models/team_$id.php")) { exit(); }
        include "models/team_$id.php";
        return $team;
    }

    public function game($id) {
        if (!file_exists("models/game_$id.php")) { exit(); }
        include "models/game_$id.php";
        return $game;
    }
}