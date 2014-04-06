<?php namespace SMART\Validators;


class HotelValidator extends Validator
{
	static $createRules = array(
	  'name' => 'required|min:2|max:100',
	  'address' => 'required|min:2|max:255',
      'type' => 'required|in:hotel,hostel,apartment,holyday_home,villa,guest_house,bed_and_breakfast,boat',
	  'stars' => 'required|in:0,1,2,3,4,5',
	);
	
	static $editRules = array(
	  'name' => 'required|min:2|max:100',
	  'address' => 'required|min:2|max:255',
	  'type' => 'required|in:hotel,hostel,apartment,holyday_home,villa,guest_house,bed_and_breakfast,boat',
	  'stars' => 'required|in:0,1,2,3,4,5',
	);
}