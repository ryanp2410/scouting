<?php

class Team
{
	public $teamDetails;	/*, $number, $name, $offense, $defense, $notes*/

	public function __construct(DB $db)
	{
		$this->db = $db;

		if(isset($_GET['number']))
		{
			$this->number = $_GET['number'];
			$this->teamDetails = $this->db->getTeamByNumber($this->number);
			return $this->teamDetails;
		}
	}

	public function getTeamDetails()
	{
		return $this->teamDetails;
	}
}