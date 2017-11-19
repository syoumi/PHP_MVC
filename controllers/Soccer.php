<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 12:32 م
 */

class Soccer extends Controller
{
    public function index() {
        $this->ranking();
    }

    public function ranking() {
        /* Code de l'action 'ranking'. */
        $team_names = $this->soccer->team_names();
        $ranking = $this->soccer->ranking();
        $title = 'Classement de la ligue de football';

        $this->loader->load('ranking', ['title'=>$title, 'ranking'=>$ranking, 'team_names'=>$team_names]);
    }

    public function team($id) {
        /* Code de l'action 'team'. */
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id===null || $id === false || !file_exists("models/team_$id.php")) {
            exit();
        }


//   et les informations liées à l'équipe choisie par le client.
        $team_names = $this->soccer->team_names();
        $team = $this->soccer->team($id);

        $title = $team_names[$id];

        $this->loader->load('team',
            ['title'=>$title, 'team_names'=>$team_names, 'team'=>$team, 'id'=>$id]);
    }

    public function game($id) {
        /* Code de l'action 'game'. */
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id===null || $id === false || !file_exists("models/game_$id.php")) {
            exit();
        }

// - Inclure les fichiers avec les noms des équipes
        $team_names = $this->soccer->team_names();

//   et les informations liées au match choisi par le client.
        $game = $this->soccer->game($id);

// calculer le résultat total du match
        $result = [0, 0];
        $result[0] = $this->goal_counts($game, 0);
        $result[1] = $this->goal_counts($game, 1);



        $title = "Match N° " . $id;

        $this->loader->load('game', ['title'=>$title, 'team_names'=>$team_names,
            'game'=>$game, 'result'=>$result]);
    }

    private function goal_counts($game, $position) {
        /* Fonction à coder et qui peut être utile dans l'action 'game'. */


        $result = 0;

        foreach ($game['goals'] as $value){
            if ($value['team'] == $position){
                $result++;
            }
        }

        return $result;
    }
}