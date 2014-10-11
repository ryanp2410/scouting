<?php

require_once 'config.php';

switch ($_GET['p']) 
{
	case 'home':
		Page::writePage('homePage');
		break;

	case 'insert':
		Page::writePage('insertPage');
		break;

	case 'team':
		Page::writePage('teamPage');
		break;

	case 'table':
		Page::writePage('tablePage');
		break;
	
	default:
		Page::writePage('404');
		break;
}