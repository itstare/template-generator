<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\Validation\Rule;

class HotelController extends Controller
{
    public function insert(Request $request) {
    	$rules = [
    		'hotel_name' => ['required', 'string', 'unique:hotels'],
    		'general' => ['required'],
    		'position' => ['required'],
    		'accommodation' => ['required'],
    		'service' => ['required'],
    		'content' => ['required'],
    		'beach' => ['required'],
    		'sports_fun' => ['required'],
    		'notice' => ['required'],
    		'url' => ['required']
    	];
    	$request->validate($rules);

    	$hotel = Hotel::create([
    		'hotel_name' => $request->hotel_name,
    		'general' => $request->general,
    		'position' => $request->position,
    		'accommodation' => $request->accommodation,
    		'service' => $request->service,
    		'content' => $request->content,
    		'beach' => $request->beach,
    		'sports_fun' => $request->sports_fun,
    		'notice' => $request->notice,
    		'url' => $request->url
    	]);

    	return redirect()->route('hotel.view', $hotel->id);
    }

    public function view($id) {
    	$hotel = Hotel::where('id', $id)->firstOrFail();

    	return view('hotel.view', compact('hotel'));
    }

    public function index() {
    	$hotels = Hotel::simplePaginate(25);

    	return view('hotel.index', compact('hotels'));
    }

    public function edit($id) {
    	$hotel = Hotel::where('id', $id)->firstOrFail();

    	return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, $id) {
    	$rules = [
    		'hotel_name' => ['required', 'string', Rule::unique('hotels')->ignore($id)],
    		'general' => ['required'],
    		'position' => ['required'],
    		'accommodation' => ['required'],
    		'service' => ['required'],
    		'content' => ['required'],
    		'beach' => ['required'],
    		'sports_fun' => ['required'],
    		'notice' => ['required'],
    		'url' => ['required']
    	];
    	$request->validate($rules);

    	$hotel = Hotel::where('id', $id)->firstOrFail();

    	$hotel->update([
    		'hotel_name' => $request->hotel_name,
    		'general' => $request->general,
    		'position' => $request->position,
    		'accommodation' => $request->accommodation,
    		'service' => $request->service,
    		'content' => $request->content,
    		'beach' => $request->beach,
    		'sports_fun' => $request->sports_fun,
    		'notice' => $request->notice,
    		'url' => $request->url
    	]);

    	return redirect()->route('hotel.view', $hotel->id);
    }

    public function delete($id) {
    	$hotel = Hotel::where('id', $id)->firstOrFail();
    	$hotel->delete();

    	return redirect()->route('hotel.index')->with('status', 'Hotel obrisan!');
    }

    public function search(Request $request) {
    	$rules = [
    		'term' => ['required', 'string']
    	];
    	$request->validate($rules);
    	
    	$search = $request->term;

    	$hotels = Hotel::query()->where('hotel_name', 'LIKE', "%{$search}%")->simplePaginate(25);

    	return view('hotel.search-results')->with([
    		'hotels' => $hotels,
    		'term' => $search
    	]);
    } 
}
