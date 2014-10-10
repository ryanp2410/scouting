<?php

require_once 'config.php';

$db = new DB();

$team = new Team($db);

?>

<h3 class="welcome">Welcome to my scouting app!</h3>