<?php

class WelcomeController extends BaseController {

	public function welcome()
	{
		return View::make('frontend.pages.home');
	}

	public function dummy()
	{
		return 'dummy is in the house';
	}
}