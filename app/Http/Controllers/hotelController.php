<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotels;
use Illuminate\Support\Facades\DB;

class hotelController extends Controller
{
    //
	public function getListHotel(){
		$hotel = Hotels::all();
		return view('hotel', [
			'hotel' => $hotel
		
		]);

	}
	public function insertHotel(Request $request){
		$hotel = new Hotels();
		$hotel->hotel_name=$request['hotel_name'];
		$hotel->hotel_email=$request['hotel_email'];
		$hotel->hotel_address=$request['hotel_address'];		
		$hotel->hotel_city=$request['hotel_city'];
		$hotel->save();
		return 1;
	}
	public function editHotel(Request $request){
		
	}
	public function findEditHotel($id){
		$hotel = DB::table('hotel')->where('id', $id)->get();
		return view('edit', [
			'hotel'=> $hotel
		]);
	}
}
