<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get("/" , function(){
	echo "Home Page";
});

///////////////////////////////////
//parameters sending with route//
/////////////////////////////////

Route::get("/get_user/{id}",function($id_value){

	echo "User Detail : " . $id_value;
});


Route::get("/profile/{id}/user/{name}",function($id_value,$name){

	echo " User Detail : " . $id_value . " With name  : " . $name;
});


////////////////////////////
///////// Optional Paream //
///////////////////////////

Route::get("/user/{id?}",function($id=99999999999){
	echo "$id";
});




////////////////////////////////
/////////// Param Validation //
///////////////////////////////

Route::get("user_detail/{id}/{name}",function($id){

	echo "With Validation : $id";	
})->where(["id"=>"[0-9]+","name" => "[a-zA-Z]{5}"]);

/////////////////////////////
//Encoded Forward Slashes
////////////////////////////

/*
35202-0340609-9
evs@gmail
*/


Route::get('search/{search}', function ($search) {
    echo "Search Route " .$search;
})->where('search', '.*');


Route::redirect("/get_search","search/2323");



Route::any("/method",function(){

	echo "Method allow GET,PUT,POST,DELETE";
});

Route::match(['get','put','post','delete'],"/method",function(){

	echo "Method allow GET,PUT,POST,DELETE";
});


//name route

/////////////////////////////////////////////
//Named Routes
Route::get("/user/info",function(){

	echo "It's a name route ";
})->name("info");


Route::get("delete/{id}",["as" => "Remove",function($id){
		echo "ok";
}]);


Route::get("/call_profile",function(){
	return redirect()->route("info");
});




Route::get('user/{id}/profile', function ($id) {
    echo "It's a name route with parameter id  : " . $id ;
})->name('profile');

Route::get("check_name_route/{id}",function($id){

	//echo route("info"); 
//	return redirect()->route("info");
	return redirect()->route("profile",["id"=>$id]);
});



/////////////////////////////////
//Route Groups
////////////////////////////////


Route::group(["prefix" => "admin/"],function($id){

	Route::get("delete/{id}",function($id){
		echo "route-group  => user/delete : " .$id;
	});

	Route::get("update/{id}",function($id){

		echo "route-group => user/info : " . $id;
	});
});




Route::group(["prefix" => "user/{id}","as" => "UserInfo/"],function($id){

	Route::get("delete",["as" => "Remove",function($id){
		echo "route-group  => user/delete : " .$id;
	}]);

	Route::get("update",["as" => "Edit" ,function($id){

		echo "route-group => user/info : " . $id;
	}]);
});



Route::get("redirect_group/{id}",function($id){

	return redirect()->route("UserInfo/Remove",["id"=>$id]);
});


/*

Route::fallback(function () {
    echo "NULL Return";
});

*/

////////////////////////////////////////////////////////////
///////////// Controller  
///////////////////////////////////////////////////////////


Route::get("test","SimpleController@simple");
Route::get("param/{id}","SimpleController@param");

//Controller in Folder//

Route::get("folder","Admin\LoginController@call");

//call every method with controller project

//Magic __invoke method call //
Route::get("m1","MagicController");
Route::get("m2","MagicController@show");
Route::get("m3/{id}","MagicController");

//////////////////////////////////
// Resource Controller  { make:controller name-of-controller --resource }

Route::resource("crud","CRUDController");

//Partial Resource Routes
//Route::resource("crud","CRUDController")->only(['index','destroy']);
//Route::resource("crud","CRUDController")->except(['destroy']);


////////////////////////////////////
/////////////// Request Obj Detail
///////////////////////////////////

Route::get("req/{id}","SimpleController@req");




/////////////////////////////
///////// Blade ///
///////////////////////////

Route::get("blade","BladeController@simple");
Route::get("parent","BladeController@parent");
Route::get("child","BladeController@child");



///////////////////////////////
////////////// Query Builder //
////////////////////////////////

Route::get("db","DBController@db_index");


/////////////////////////////////
///////////////////// Eloquent ORM//
///////////////////////////////////


Route::get("orm","ORMController@orm");


/////////////////////////////////
///////////////////// Advance ORM//
///////////////////////////////////


Route::get("adv_orm","ORMAdvanceController@adv_orm");


/////////////////////////////////
///////////////////// Advance DB Query Builder//
///////////////////////////////////

Route::get("adv_db","DBAdvanceController@adv_db");

/////////////////////////
///Advance ORM//
//////////

Route::get("orm","ORMAdvanceController@orm");





