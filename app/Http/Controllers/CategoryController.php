<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::where('status', '1')->get();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {

        $categories = Category::where('status', '1')->get();
        return view('admin.category.add', compact('categories'));
    }
    public function store(Request $request)
    {

        $data = array(
            'name' => $request->name,
            'parent_id' => $request->parent_id,

        );

        $create = Category::create($data);
        return redirect()->route('category.create');
    }
    public function show(Category $category)
    {
    }

    public function edit(Request $request, Category $category)
    {
        $id = $request->id;
        $categories = Category::whereNull('parent_id')->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('categories', 'category'));
    }



    public function update(Request $request, Category $category)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        );
        $category = Category::find($id);
        $category->update($data);
        return redirect()->route('category.list');
    }

    public function destroy(Request $request, Category $category)
    {

        $id = $request->id;

        $category=Category::find($id);
        $category->delete();
        return response()->json('success');
    }
    function dashboard()
    {
        return view('admin.layout');
    }
}
