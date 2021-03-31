<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // prendo 20 prodotti per passarli nella homepage
      $products = Product::inRandomOrder()
      ->with('categories')
      ->limit(24)->get();

      $categories = Category::all();

      // dd($categories);

      foreach ($products as $key => $product) {
        $price = $product -> price;
        if(is_numeric($price)) {
          // dd("price è un numero");
          if(!$price) {
            $price = 0;
            // dd($price);
          } elseif ($price < 0) {
            $price = 0;
            // dd("price è minore di 0");
          } else {
            $lastN = substr($price, -1);
            if ($lastN == 0) {
              //altrimenti si cancella lo 0 dopo la virgola
              $price = $price / 100 . 0.00;
            } else {
              // dd("price è maggiore di 0");
              $price = $price / 100;
            }
          }
        } else{
          $price = 0;
          dd("price non è un numero");
        }
        $product -> price = $price;
      }
      // dd($price);
      return view('pages.products', compact('products', 'categories'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.prod-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
