<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::get();

        return view('home', ['products' => $products]);
    }

    public function showProduct($id)
    {

        $product = Product::find($id);

        return view('edit-product-dashboard', ['product' => $product]);
    }

    public function updateProduct(Request $request)
    {
        DB::beginTransaction();
        try {

            $product = Product::find($request->id);
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('Image'), $filename);
            $data['image'] = $filename;

            $product->update([
                'name' => $request->name,
                'image' => 'http://localhost/Image/'.$filename,
                'price' => $request->price,
                'description' => $request->description,
                'quantity' => $request->quantity
            ]);
            DB::commit();
            $products = Product::get();
            return view('home', ['products' => $products]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th->getMessage();
        }
    }

    public function destroyProduct($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::find($id);
            $product->delete();
            DB::commit();
            $products = Product::get();

            return view('home', ['products' => $products]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
