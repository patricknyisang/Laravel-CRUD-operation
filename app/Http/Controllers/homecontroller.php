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

class homecontroller extends Controller
{
    public function addview()
    {   
        return view('add');
    }

    public function edit($product_id)
    {
        $product = TBproducts::where('product_id', $product_id)->first(); // Correct

        return view('edit', compact('product'));
    }
    

    public function getitems()
    {   
        $fetchitems = TBproducts::all();
       
        return view('view',compact("fetchitems"));
 
    }
    public function store_item(Request $request){
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

               return redirect(url('fetchproducts'))->with ('message', 'created successfully');
            }
            public function deleteitem($id){

                TBproducts::where(['product_id' => $id], true)->delete();
            
                return redirect()->route('view')->with('success', 'Deleted successfully!');
            }
            public function updateitem(Request $request,$id){
              
                $productname = $request->get('proname');
                $productprice = $request->get('price');
                $quantity = $request->get('quantity');
        
                TBproducts::where(['product_id' => $id])->update([
              
                    "proname" => $productname,
                    "quantity" => $quantity, 
                    "price" => $productprice,
                 
            ]);
            return redirect(url('fetchproducts'))->with ('message', 'Update successfully');
        }

    }