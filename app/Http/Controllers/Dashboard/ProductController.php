<?php

namespace App\Http\Controllers\Dashboard;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Manage all resources as a table.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("dashboard.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("dashboard.products.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // The filename of the photo
        // Null is the default
        // if photo name is null, then the database will add
        // "default.jpg" as default
        $photoName = null;
        if (isset($request->photo)) {
            $photoExt = $request->photo->getClientOriginalExtension();
            $photoName = time() . '.' . $photoExt;
            $photoPath = "assets/img/products";
            $photoExt = $request->photo->move($photoPath, $photoName);
        }

        Product::create([
            "name" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
            "photo" => $photoName,
            "category_id" => $request->category
        ]);
        return redirect()->back()->with("success", "Create Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where("id", $id)->firstOrFail();
        $categories = Category::all();
        return view("dashboard.products.edit", compact("product", "categories"));
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
        $product = Product::where('id', '=', $id)->first();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;


        // The filename of the photo
        // Null is the default
        // if photo name is null, then the database will add
        // "default.jpg" as default
        if (isset($request->photo)) {
            $photoExt = $request->photo->getClientOriginalExtension();
            $photoName = time() . '.' . $photoExt;
            $photoPath = "assets/img/products";
            $photoExt = $request->photo->move($photoPath, $photoName);
            $product->photo = $photoName;
        }

        $product->save();

        return redirect()->back()->with("success", "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where("id", "=", $id)->first();
        if (!$product) return True;

        $product->delete();

        $path = "./assets/img/products/" . $product->photo;
        if (file_exists($path))
            unlink($path);

        return true;
    }
}
