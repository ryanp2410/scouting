<?php

class Page
{
	public static function writePageHeader()
	{
		require_once 'assets/templates/header.php';
	}

	public static function writePageContent($name)
	{
		if(file_exists('assets/templates/' . $name . '.php'))
		{
			require_once 'assets/templates/' . $name . '.php';
		} else {
			return false;
		}
	}

	public static function writePageFooter()
	{
		require_once 'assets/templates/footer.php';
	}

	public static function writePage($name)
	{
		self::writePageHeader();
		self::writePageContent($name);
		self::writePageFooter();
	}
}