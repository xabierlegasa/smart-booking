<?php namespace SMART\Storage\Eloquent\Models;

class RoomFacility extends \Eloquent
{
	protected $fillable = array('room_id', 'bathroom');

	protected $table = 'room_facilities';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}