<?php namespace SMART\Storage\Eloquent\Models;

class Booking extends \Eloquent
{
	protected $fillable = array('user_id', 'hotel_id', 'room_id');

	protected $table = 'bookings';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}
