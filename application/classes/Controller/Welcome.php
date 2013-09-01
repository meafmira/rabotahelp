<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	public function action_index()
	{
        $content = View::factory('welcome');
        $this->template->content = $content;
	}

} // End Welcome
