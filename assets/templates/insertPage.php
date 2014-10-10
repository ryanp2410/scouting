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
		<!-- <input type="text" name="number" maxlength="4" id="number" required><br>
		<input type="text" name="name" maxlength="32" id="name" required><br>
		<input type="text" name="offense" maxlength="1" id="offense" required><br>
		<input type="text" name="defense" maxlength="1" id="defense" required><br>
		<input type="text" name="recommend" maxlength="2" id="recommend" required><br>
		<textarea name="notes" id="notes" cols="30" rows="10"></textarea><br>
		<input type="submit"><br> -->
	</form>
</div>