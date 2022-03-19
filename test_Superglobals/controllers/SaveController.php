<?php
namespace controllers;

/**
 * 
 */
class SaveController extends Controller
{
	public function afficheSave()
	{
		$post = new controller;
		$postNom = $post->get_POST('nom');

		$postPrenom = $post->get_POST('prenom');

		$postEnvoi = $post->get_POST('envoi');

		$postPage = $post->get_POST('page');

		if (isset($postPage)) {
			$error = new controller;
			$error->set_SESSION('error', 'c est pas top');
			header('Location: ?action=page');
			die;
		}

		require 'views/home.php';
	}

	public function affichePage()
	{
		$error = new controller;
		$error = $error->get_SESSION('error');
		var_dump($error);
	}
}