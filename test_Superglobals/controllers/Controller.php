<?php
namespace controllers;

/**
 * 
 */
class Controller
{
	public $_POST;
	public $_SESSION;

	function __construct()
	{
		$this->define_superglobals();
	}


	public function get_POST($key = null)
	{
		if ($key !== null) {
			if (isset($this->_POST[$key])) {
				return $this->_POST[$key];

			} else {
				null;
			}
		} else {
			return $this->_POST;
		}
	}


	public function get_SESSION($key = null)
	{
		if ($key !== null) {
			if (isset($this->_SESSION[$key])) {
				return $this->_SESSION[$key];

			} else {
				null;
			}
		} else {
			return $this->_SESSION;
		}
	}

	public function set_SESSION($key, $value)
	{
		$this->_SESSION[$key] = $value; 
	}

	private function define_superglobals()
	{
		$this->_POST = (isset($_POST)) ? $_POST : null;

		$this->_SESSION = (isset($_SESSION)) ? $_SESSION : null;
	}
}
