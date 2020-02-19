<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    
    function index()
    {
    	return view("shop.home",['title' => "Home"]);
    }

    function product()
    {
        /*
        if(!session("username"))
        {
            return redirect("login_form");
        }
        */
    	$list = ProductModel::all();
    	return view("shop.product",["title" => "Product","list" => $list]);
    }

    function add_form($id=NULL)
    {

        /*
        if(!session("username"))
        {
            return redirect("login_form");
        }
        */
        $product = NULL;
        if(!empty($id))
            $product = ProductModel::find($id);

    	return view("shop.add_product",["title" => "Add Product","obj" => $product]);
    }

    function save_product(Request $req)
    {	



        //it will use in caseof multilpe files
        //dd($req->attach_file_name);

        
        //automatic way to validate request obj
    	$req->validate([
    		"name" => "required|min:5|max:20",
    		"price" => "required",
    		"quantity" => "required|integer",
            "attach_file_name" => "required|file"
    	]);
        
        


       // dd($req->all());

        //manual way//
        /*
        $validator = Validator::make($req->all(),
            [
            "name" => "required|min:5|max:20",
            "price" => "required",
            "quantity" => "required|integer"
            ]);
            */
            /*
        $validator = Validator::make($req->all(),
            [
            "name" => ["required","min:5","max:20"],
            "price" => ["required"],
            "quantity" => ["nullable","integer"]
            ]);


        if ($validator->fails()) {
            return redirect('add_product') //back()
                        ->withErrors($validator)
                        ->withInput();

        }
        */

        $prod = new ProductModel();
        if(isset($req->edit_id))
        {
            $prod = ProductModel::find($req->edit_id);
        }


        $prod->name  = $req->name;
        $prod->price = $req->price;
        $prod->quantity = $req->quantity;



        //File Info//
        //echo $req->attach_file_name->path();

        $ext = $req->attach_file_name->extension();
        $file_name = "file_".rand().".".$ext;

        //random name store
       // $req->attach_file_name->store("image");

        $req->attach_file_name->storeAs("image",$file_name,"public");

        $prod->image =  $file_name;

        if($prod->save())
        {
            return redirect("product");
        }
        else
        {

        }
    }
    function delete(int $id)
    {
        $p = ProductModel::find($id);
        if($p->delete())
        {
            return redirect("product");
        }
        else
        {

        }
    }
}
