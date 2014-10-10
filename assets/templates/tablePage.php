<?php

$db = new DB();

$team = new Team($db);

$details = $db->getTeamsByField();

//print_r($details);

?>

<table id="team">
	<tr>
		<td>Number</td>
		<td>Name</td>
		<td>Offense</td>
		<td>Defense</td>
		<td>Recommend</td>
		<td>Notes</td>
	</tr>
	<?php foreach($details as $team => $notes){?>
		<tr>
			<td><?='<a href="team.php?number=' . $notes['Number'] . '">'?><?=$notes['Number']?><?='</a>'?></td>
			<td><?=$notes['Name']?></td>
			<td><?=$notes['Offense']?></td>
			<td><?=$notes['Defense']?></td>
			<td><?=$notes['Recommend']?></td>
			<td><?=$notes['Notes']?></td>
		</tr>
	<?php }?>
</table>