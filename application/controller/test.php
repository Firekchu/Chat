<?php

class Test extends Controller
{
	public function index($arg = null, $args = null)
	{
		if ($arg != null & $args != null) {
			echo $arg ." ". $args;
		} else {
			echo "Hey! Listen!";
		}
	}

	public function bye($name = null)
	{
		if ($name != null) {
			echo "Bye " . $name;
		} else {
			echo "Bye!";
		}
	}
}

?>