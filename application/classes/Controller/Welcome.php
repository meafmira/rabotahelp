<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	public function action_index()
	{
        $this->request->protocol('HTTP/1.0');
        $this->response->protocol('HTTP/1.0');
        $content = View::factory('welcome');
        $this->template->content = $content;
	}

} // End Welcome
