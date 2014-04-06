<?php namespace SMART\Storage\Eloquent\Models;

class RoomAvailableDate extends \Eloquent
{
	protected $fillable = array('room_id', 'year', 'month', 'day', 'to_days', 'status');

	protected $table = 'room_available_dates';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}