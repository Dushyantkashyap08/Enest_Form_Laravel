<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudOperationsController extends Controller
{
    //login controller
    public function login()
    {
        return view('login');
        
    }

    //addproduct function
    public function addproduct(Request $request, $id)
    {
        $user =Auth::guard('signup')->user();
        $userId=$user->id;
        $data = Category::all();
        $products=Product::where('id',$id)->get();
        return view('add-product', compact('data', 'products','userId'));
    }

    //home function
    public function home()
    {
        $products = Product::inRandomOrder()->limit(6)->get(); // Retrieve 6 random products
        $data = Category::all();
    
        return view('home', compact('data', 'products'));
    }
    
    //contactus function
    public function contactus()
    {
        $data = Category::all();
        return view('contact-us', compact('data'));
    }

    //buynow function
    public function buynow(Request $request, $id)
    {
        $data = Category::all();
        $category=Category::where('id',$id)->get();
        $product = Product::where('category_id', $id)->get();
        return view('buy-now', compact( 'data','category','product'));
    }


    //cart_add function
    public function cart_add(Request $request)
    {
       $uid = $request->get('userid');
       $prodid = $request->get('productid');
     $prodstock = $request->get('productstock');
        $qty = $request->get('quantity');


        $add = new Cart;
        if($request->isMethod('POST'))
        {
            if($qty>0 && $qty<=$prodstock)
            {
                Product::where('id',$prodid)->decrement('pstock', $qty);
                $add->userid = $uid;
                $add->productid = $prodid;
                $add->quantity = $qty;
         
                $add->save();
            }
            
            elseif(empty($qty))
            {
                return redirect()->back()->with('errorr','Please enter a quantity');
            }
            else
            {
                return redirect()->back()->with('error','Quantity must be within the range');
            }
        }
      return redirect()->back()->with('Success','Added to cart successfully');

    }

}
