<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//All Listings
Route::get('/', function () {
    return view('listings',[
        "heading" => "Latest Listings",
        "listings" => Listing::all()
        //Varibles passed in can be acceed in thier View page.
    ]);
});

//Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        "listing" => Listing::find($id)
    ]);
});

/*
Route::get('/hello', function(){
    return "Hello World";
});

Route::get("/posts/{id}", function($id){
    
    //dd($id);
    // Die Dump: Helper debug function, stops everything and only shows the variable that you request
    
    //ddd($id);
    // Die Dump Debug : Will do everything Die and Dump do but also will give a lot more data, generally prefer this one.
    
    return response("Post ". $id);
})->where("id", '[0-9]+');
// Where is a contrant system on a variable in this case only allowing numbers to be used for id if not return 404

Route::get("/search", function(Request $request){
    dd($request->name);
});
// In a query situation the you can reference the name of the variable $VARBLENAME->$VARIBLENAME2
*/