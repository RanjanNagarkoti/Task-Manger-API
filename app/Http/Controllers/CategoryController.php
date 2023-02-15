<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return response()->json(["Message" => "Category list", $category], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|unique:categories|max:255',
            'description' => 'required|max:1000',
        ]);

        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return response()->json(["Message" => "Category created sucessfully"], 200);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $category = Category::findOrFail($id);

        if ($category) {
            $category->update($data);

            return response()->json(["Message" => "Category updated sucessfully"], 200);
        } else {
            return response()->json(["Message" => "Category not found"], 200);
        }
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json(["Message" => "Category found", 'data' => $category], 200);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(["Message" => "Category removed"], 200);
    }
}
