<?php require_once 'config.php';

$db = new DB();

$team = new Team($db);

if(isset($_POST['number'])){
	$db->insertTeam($_POST['number'], $_POST['name'], $_POST['offense'], $_POST['defense'], $_POST['recommend'], $_POST['notes']);
	$success = true;
}

if($success){ 

?>

<h3 class="good">The insert was successful.</h3>
<a href="insert.php">Enter another team.</a><br>
<a href="table.php">View teams.</a>

<?php } else { ?>

<h3 class="error">There was an error inserting your info.</h3>
<a href="insert.php">Enter another team.</a>

<?php } ?>