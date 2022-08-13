<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use DateTime;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orderdetails()
    {
        $data= Order::all();
        return $data;
    }

    public function allcart()
    {
        $cartdata= Cart::all();

        return $cartdata;
    }
    public function confirmorder()
    {
        $cartdata= Cart::all();

        foreach($cartdata as $i)
            {
                $order=new Order();

                $order->name = $i->name;
                $order->price = $i->price;
                $order->number = $i->number;
                $order->description = $i->description;
                $order->time = new DateTime();

                $order->save();
                
            }

            Cart::whereNotNull('id')->delete();

            return "ok";

    }

    public function removecart(Request $request)
    {
        $cartdata= Cart::where('id',$request->id)->delete();

        return $cartdata;
    }

    public function addtocart(Request $request)
    {
        $data = Product::where("id",$request->id)->first();

        $cartdata= Cart::all();
        $flag=true;
        
        if(count($cartdata)>0)
        {
            foreach($cartdata as $i)
            {
                if($i->id==$data->id){
                    $flag=false;
                }
                
            }
        }
        if($flag==true)
        {
            $cart= new Cart();

            $cart->id=$data->id;
            $cart->name=$data->name;
            $cart->description=$data->description;
            $cart->price=$data->price;

            $cart->save();

        }
        
        
        return "Ok";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function productList()
    {
        $products = Product::all();

        return $products;
    }

    public function product(Request $request)
    {
        $products = Product::where("id",$request->id)->first();

        return $products;
    }
}
