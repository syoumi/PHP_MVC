<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 12:13 م
 */
?>

<table class="table">
    <tr>
        <th>Date du match</th>
        <th>Équipe à domicile</th>
        <th>Résultat</th>
        <th>Équipe à l'extérieur</th>
    </tr>
    <tr class="active">
        <td><?php echo $game['date']; ?></td>
        <td><a href="/index.php/soccer/team/<?php echo $game['teams'][0];?>">
                <?php echo $team_names[$game['teams'][0]]?>
            </a>
        </td>
        <td><?php echo $result[0] . ' - ' . $result[1]; ?></td>
        <td><a href="/index.php/soccer/team/<?php echo $game['teams'][1];?>">
                <?php echo $team_names[$game['teams'][1]]?>
            </a>
        </td>
    </tr>
    <?php foreach ($game['goals'] as $value): ?>
        <tr>
            <td>
                <?php echo $value['time']; ?>'
            </td>
            <td>
                <?php echo $value['player']; ?>
            </td>
            <td></td><td></td>
        </tr>
    <?php endforeach; ?>
</table>
