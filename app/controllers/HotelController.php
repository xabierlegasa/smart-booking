<?php

use SMART\Storage\Interfaces\HotelRepositoryInterface;

use SMART\Storage\Eloquent\Repositories\HotelRepository;
use SMART\Validators\HotelValidator;

class HotelController extends BaseController
{	
	protected $hotelRepository;
	protected $validator;
	
	public function __construct(HotelRepositoryInterface $hotelRepository, HotelValidator $validator)
	{
		$this->hotelRepository = $hotelRepository;
		$this->validator = $validator;
	}
	
	public function index()
	{
		$hotelRepository = new HotelRepository();
		$hotels = $hotelRepository->getPaged(1, 50);
		
		return View::make('frontend.pages.hotels.index')
		->with(compact('hotels'));
	}
	
	public function create()
	{
		return View::make('frontend.pages.hotels.create');
	}
	
	public function store()
	{
		$input = Input::all();
		
		if (!$this->validator->validate($input, 'createRules'))
		{
			return Redirect::route('hotel.create')
			->with('editMode', false)
			->withErrors($this->validator->errors())
			->withInput();
		}
		
		$hotel = $this->hotelRepository->create($input);	
		return Redirect::route('hotel.index');
	}
	
	public function edit($id)
	{
		if (Request::isMethod('get')) {
			$hotel = $this->hotelRepository->find($id);
			
			return View::make('frontend.pages.hotels.edit')
			->with(compact('hotel'));;
		}else if (Request::isMethod('post')) {
			$input = Input::all();
			
			if (!$this->validator->validate($input, 'editRules')) {
				$hotel = $this->hotelRepository->find($id);
				
				return Redirect::route('hotel.edit', $id)
				->with(compact('hotel'))
				->with('editMode', true)
				->withErrors($this->validator->errors())
				->withInput();
			}
			
			$this->hotelRepository->update($input, $id);
			Session::flash('success', 'Hotel updated successfully.');
			return Redirect::route('hotel.index');
		}
	}
	
	public function delete($id)
	{
		$this->hotelRepository->delete($id);
		
		Session::flash('success', 'Hotel deleted successfully.');
		return Redirect::route('hotel.index');
	}
}