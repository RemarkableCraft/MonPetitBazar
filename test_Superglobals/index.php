<?php
session_start();

require_once 'controllers/Controller.php';

require_once 'controllers/HomeController.php';
use controllers\HomeController;

require_once 'controllers/SaveController.php';
use controllers\SaveController;

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'save':
			$save = new SaveController;
			$save->afficheSave();
			break;

		case 'page':
			$page = new SaveController;
			$page->affichePage();
			break;
		
		default:
			$home = new HomeController;
			$home->afficheHome();
			break;
	}
} else {
	$home = new HomeController;
	$home->afficheHome();
}

