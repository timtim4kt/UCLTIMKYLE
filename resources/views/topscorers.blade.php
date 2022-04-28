@extends('layouts.app')

@section('content')

<?php
require_once('..\app\includes\playerdata.php');

?>
<div class="container">


<section>
<!-- display a table of records -->
<h1 class="tsc">TOP SCORERS UCL 2022</h1>   
<table>
<tr>
<th>Name</th>
<th>Team</th>
<th>Avg Rating</th>
<th>Goals</th>
</tr>
<?php 

$queryAllCategories = 'SELECT * FROM players
ORDER BY player_goals DESC';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$players = $statement2->fetchAll();
$statement2->closeCursor();

foreach ($players as $player) : ?>
<tr>
<td><?php echo $player['player_name']; ?></td>
<td><?php echo $player['player_team']; ?></td>
<td><?php echo $player['player_average_rating']; ?></td>
<td><?php echo $player['player_goals']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</section>
@endsection

