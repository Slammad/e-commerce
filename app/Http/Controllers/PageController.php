<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ProductResource;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products =Product::inRandomOrder()->take(8)->get();
        $categories =Category::all();

        return view('home')->with([
            'products'=>$products,
            'categories'=>$categories
        ]);
     
    }

    public function listproduct()
    {

        $allproduct=Product::paginate(15);
        return ProductResource::collection($allproduct);
    }

    public function show($slug){
        $products=Product::where('slug',$slug)->firstOrFail();
        $categories =Category::all();
        $mightAlsoLike = Product::where('slug','!=',$slug)->mightAlsoLike()->get();
        return view('product')->with([

            'products'=>$products,
            'categories'=>$categories
        ]);

    }
}

   