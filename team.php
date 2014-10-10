<?php

require_once 'config.php';

$db = new DB();

$team = new Team($db);

Page::writePage('teamPage');