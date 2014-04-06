<?php namespace SMART\Classes;

class UserStatus
{
	const TO_BE_CONFIRMED = 'to_be_confirmed';
	const ACTIVE = 'active';
	const RESIGN = 'resign';
	const BANNED = 'banned';
	
	static function getSimpleArray()
	{
		return array(UserStatus::TO_BE_CONFIRMED, UserStatus::ACTIVE, UserStatus::RESIGN, UserStatus::BANNED);
	}
}
