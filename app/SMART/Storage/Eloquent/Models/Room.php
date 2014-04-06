<?php namespace SMART\Storage\Eloquent\Models;

class Room extends \Eloquent
{
	protected $fillable = array('hotel_id', 'space', 'status');

	protected $table = 'rooms';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}