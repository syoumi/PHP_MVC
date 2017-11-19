<?php
/**
 * Created by PhpStorm.
 * User: syoumi
 * Date: 19/11/17
 * Time: 11:47 ص
 */
?>
<h3><a href="/">Classement</a></h3><br>
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
    <tr class="active">
        <td><?php echo $team['ranking']; ?></td>
        <td><b><?php echo $team_names[$id]; ?></b></td>
        <td><?php echo $team['played']; ?></td>
        <td><?php echo $team['won']; ?></td>
        <td><?php echo $team['drawn']; ?></td>
        <td><?php echo $team['lost']; ?></td>
        <td><?php echo $team['goals_for']; ?></td>
        <td><?php echo $team['goals_against']; ?></td>
        <td><?php echo $team['goal_difference']; ?></td>
        <td><?php echo $team['points']; ?></td>
    </tr>
</table>

<h3>Matchs</h3><br>

<table class="table table-hover">
    <?php foreach ($team['games'] as $key => $value): ?>
        <tr>
            <td><?php echo $value['date']; ?></td>
            <td>
                <?php if ($value['teams'][0] == $id): ?>
                    <b><?php echo $team_names[$value['teams'][0]]; ?></b>
                <?php else: ?>
                    <a href="/index.php/soccer/team/<?php echo $value['teams'][0]; ?>">
                        <?php echo $team_names[$value['teams'][0]]; ?>
                    </a>
                <?php endif; ?>
            </td>
            <td>
                <a href="/index.php/soccer/game/<?php echo $key; ?>">
                    <?php if ($value['teams'][0] == $id): ?>
                        <b><?php echo $value['goal_counts'][0]; ?></b>
                    <?php else: ?>
                        <?php echo $value['goal_counts'][0]; ?>
                    <?php endif; ?>
                    &nbsp;&nbsp;-&nbsp;&nbsp;
                    <?php if ($value['teams'][1] == $id): ?>
                        <b><?php echo $value['goal_counts'][1]; ?></b>
                    <?php else: ?>
                        <?php echo $value['goal_counts'][1]; ?>
                    <?php endif; ?>
                </a>
            </td>
            <td>
                <?php if ($value['teams'][1] == $id): ?>
                    <b><?php echo $team_names[$value['teams'][1]]; ?></b>
                <?php else: ?>
                <a href="/index.php/soccer/team/<?php echo $value['teams'][1]; ?>">
                    <?php echo $team_names[$value['teams'][1]]; ?>
                </a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>