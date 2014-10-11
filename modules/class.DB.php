<?php

class DB
{
	private $db;

	public function __construct()
	{
		try
		{
			$this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
			//echo 'Connected';
		} catch(PDOException $e) {
			echo $e->message();
		}

		$this->getTeamByNumberStmt = $this->db->prepare("SELECT * FROM `teams` WHERE `number` = :teamNumber");
		$this->getTeamsByFieldStmt = $this->db->prepare("SELECT * FROM `teams` ORDER BY :field ASC");
		$this->insertTeamStmt = $this->db->prepare("INSERT INTO `teams`(`Number`, `Name`, `Offense`, `Defense`, `Recommend`, `Notes`) VALUES (:teamNumber, :name, :offense, :defense, :recommend, :notes)");
	}

	public function getTeamByNumber($number)
	{
		$this->getTeamByNumberStmt->execute([':teamNumber' => $number]);
		$this->team = $this->getTeamByNumberStmt->fetch(PDO::FETCH_ASSOC);
		if(count($this->team))
		{
			return $this->team;
		} else {
			echo "There was an error.";
		}

	}

	public function getTeamsByField($field = '`Recommend`')
	{
		$this->getTeamsByFieldStmt->execute([':field' => $field]);
		$this->teams = $this->getTeamsByFieldStmt->fetchAll(PDO::FETCH_ASSOC);
		return $this->teams;
	}

	public function insertTeam($number, $name, $offense, $defense, $recommend, $notes)
	{
		$this->insertTeamStmt->execute([':teamNumber' => $number, ':name' => $name, ':offense' => $offense, ':defense' => $defense, ':recommend' => $recommend, ':notes' => $notes]);
	}
}