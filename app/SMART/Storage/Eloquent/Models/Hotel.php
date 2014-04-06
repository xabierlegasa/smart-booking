<?php namespace SMART\Storage\Eloquent\Models;

class Hotel extends \Eloquent
{
	protected $fillable = array('type', 'address', 'name', 'stars');

	protected $table = 'hotels';

	protected $softDelete = true;

	protected $guarded = array();

	public static $rules = array();
}
