<?php

class Team
{
	public $teamDetails, $number;	/* number, name, offense, defense, recommend, notes */

	public function __construct(DB $db)
	{
		$this->db = $db;

		if(isset($_GET['number']))
		{
			$this->number = $_GET['number'];
			$this->teamDetails = $this->db->getTeamByNumber($this->number);
		}
	}

	public function getTeamDetails()
	{	
		return $this->teamDetails;
	}
}