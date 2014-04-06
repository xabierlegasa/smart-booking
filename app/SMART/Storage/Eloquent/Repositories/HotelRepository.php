<?php namespace SMART\Storage\Eloquent\Repositories;

use SMART\Storage\Interfaces\HotelRepositoryInterface;
use SMART\Storage\Eloquent\Models\Hotel;

class HotelRepository implements \SMART\Storage\Interfaces\HotelRepositoryInterface
{
    public function getPaged($page = 1, $numPerPage = 50)
    {
        \DB::getPaginator()->setCurrentPage($page);
        return hotel::paginate($numPerPage);
    }
	
	public function find($id)
	{
		return $data =  Hotel::find($id);
	}
	
	public function create($input)
	{
		$hotel = new Hotel($input);
		$hotel->save();
		return $hotel;
	}
	
	public function update($input, $id)
	{
		$hotel = Hotel::find($id);
		$hotel->fill($input);
		$hotel->save();
	}
	
	public function delete($id)
	{
		User::destroy($id);
	}
}