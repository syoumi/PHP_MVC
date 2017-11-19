<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 11:20 ص
 */

?>
<table class="table">
    <tr>
        <th>N°</th>
        <th>Équipe</th>
        <th>MJ</th>
        <th>G</th>
        <th>N</th>
        <th>P</th>
        <th>BP</th>
        <th>BC</th>
        <th>DB</th>
        <th>PTS</th>
    </tr>
    <?php $counter = 1; ?>
    <?php foreach ($ranking as $key => $value): ?>
    <tr>
        <td><?php echo $counter++; ?></td>
        <td><a href="/index.php/soccer/team/<?php echo $key;?>"><?php echo $team_names[$key]; ?></a></td>
        <td><?php echo $value['played']; ?></td>
        <td><?php echo $value['won']; ?></td>
        <td><?php echo $value['drawn']; ?></td>
        <td><?php echo $value['lost']; ?></td>
        <td><?php echo $value['goals_for']; ?></td>
        <td><?php echo $value['goals_against']; ?></td>
        <td><?php echo $value['goal_difference']; ?></td>
        <td><?php echo $value['points']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

