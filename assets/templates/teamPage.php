<?php

$db = new DB();

$team = new Team($db);

$details = $team->getTeamDetails();

?>

<table id="team">
	<tr>
		<td>Category</td>
		<td>Notes</td>
	</tr>
	<?php foreach($details as $category => $note){?>
		<tr>
			<td><?=$category?></td>
			<td><?=$note?></td>
		</tr>
	<?php }?>
</table>