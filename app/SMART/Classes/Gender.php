<?php namespace SMART\Classes;

class Gender
{
	const MALE = '1';
	const FEMALE = '2';
	
	static function getSimpleArray()
	{
		return array(Gender::MALE, Gender::FEMALE);
	}
}
