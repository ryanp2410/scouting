<?php

$db = new DB();

$team = new Team($db);

$details = $db->getTeamsByField();

?>

<table id="team">
	<tr>
		<th>Number</th>
		<th>Name</th>
		<th>Offense</th>
		<th>Defense</th>
		<th>Recommend</th>
		<th>Notes</th>
	</tr>
	<?php foreach($details as $team => $notes){?>
		<tr>
			<td><?='<a href="../team/' . $notes['Number'] . '">'?><?=$notes['Number']?><?='</a>'?></td>
			<td><?=$notes['Name']?></td>
			<td><?=$notes['Offense']?></td>
			<td><?=$notes['Defense']?></td>
			<td><?=$notes['Recommend']?></td>
			<td><?=$notes['Notes']?></td>
		</tr>
	<?php }?>
</table>