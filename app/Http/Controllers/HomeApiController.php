<?php

namespace App\Http\Controllers;

use App\Models\TBproducts;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;

class HomeApiController extends Controller
{




    public function store_itemAPI(Request $request){
    $dateTime = Carbon::now();

    $productname= $request->get('name');
    $productprice = $request->get('price');
    $quantity = $request->get('quantity');

    
    $insertitem = [
        "proname" => $productname,
        "price" => $productprice,
        "quantity" => $quantity, 
        
           
       ];


       TBproducts::create($insertitem);

      
    }


    public function getproductJSON()
{
    try {
  
        $productsfromtable = TBproducts::all();
        $products = [];

        foreach($productsfromtable as $product) {
            $products[] = [
                "id" => $product->{'id'},
                "ProName" => $product->{'proname'},
                "ProPrice" => $product->{'price'},
                "ProQuantity" => $product->{'quantity'},
            ];
        }


       // return response()->json([
         //   'data' => $products
     //   ], 200);
         return response()->json($products, 200);

    } catch (\Exception $e) {
        return response()->json([
            'error' => true,
            'message' => $e->getMessage()
        ], 400);
    }
}
}