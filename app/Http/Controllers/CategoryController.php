<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|max:255|string",
            "description" => "nullable|min:15|string",
        ]);

        // Redirect back if there is an error
        if ($validator->errors()->toArray()) {
            return redirect()->back()->withErrors($validator->errors()->toArray());
        }

        Category::create([
            "name" => $request->name,
            "description" => $request->description
        ]);
        return redirect()->back()->with("success", "Create Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view("categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|max:255|string",
            "description" => "nullable|min:15|string",
        ]);

        // Redirect back if there is an error
        if ($validator->errors()->toArray()) {
            return redirect()->back()->withErrors($validator->errors()->toArray());
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect()->back()->with("success", "Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }

    /**
     * Manage all resources as a table.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $categories = Category::all();
        return view("categories.manage", compact("categories"));
    }
}
