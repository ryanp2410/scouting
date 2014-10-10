<?php

require_once 'config.php';

$db = new DB();

$team = new Team($db);

if(isset($_POST['number'])){
	$db->insertTeam($_POST['number'], $_POST['name'], $_POST['offense'], $_POST['defense'], $_POST['recommend'], $_POST['notes']);
}

Page::writePage('redirectPage');

