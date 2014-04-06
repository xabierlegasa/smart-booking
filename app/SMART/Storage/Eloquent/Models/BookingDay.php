<?php namespace SMART\Storage\Eloquent\Models;

class BookingDay extends \Eloquent
{
	protected $fillable = array('user_id', 'hotel_id', 'room_id');

	protected $table = 'booking_days';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}
