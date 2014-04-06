<?php

/*
 * Custom validators
 * */

Validator::extend('alpha_num_underscore_space', function($attribute, $value)
{
	return preg_match('/^[a-z0-9 .\-]+$/i', $value);
});


