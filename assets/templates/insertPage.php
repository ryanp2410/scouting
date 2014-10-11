<div class="jumbotron">
	<form action="redirect.php" method="post">
		<label>Team Number:</label><input type="text" name="number" maxlength="4" required>
			<label>Team Name:</label><input type="text" name="name" maxlength="50">
			<label>Offense</label><select name="offense">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<label>Defense</label><select name="defense">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<label>Recommend</label><select name="recommend">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<label>Other Notes</label><textarea maxlength="2000" name="notes"></textarea>
			<input type="submit">
	</form>
</div>