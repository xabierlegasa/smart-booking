<?php namespace SMART\Storage\Eloquent\Models;

class HotelFacility extends \Eloquent
{
	protected $fillable = array('hotel_id', 'wifi', 'parking', 'airport_shuttle', 'fitness_centre', 'non_smoking_rooms', 'indoor_pool', 'spa_wellness_centre', 'pets_allowed', 'restaurant');

	protected $table = 'hotel_facilities';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}