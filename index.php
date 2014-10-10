<?php

require_once 'config.php';

$db = new DB();

$team = new Team($db);

//print_r($team->team);

//$db->insertTeam(1806,'SWAT',5,3,7,'Pretty good. Second place at KC.');

Page::writePage('homePage');