<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        // $categories = DB::select("SELECT * FROM categories");
        // dd($categories);

        // $categories = DB::table('categories')->get();

        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){

        Category::create([

            'name' => $request->name,
            'dec' => $request->dec
        ]);

        return redirect()->route('categories.index');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::findOrFail($id);

        $category->update([
            'name' => $request->name,
            'dec' => $request->dec
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }

}
