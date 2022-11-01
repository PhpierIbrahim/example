<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //
        $categories = Category::orderBy('id', 'desc');
        $categories = $categories->get();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $category = new Category;
        return view('backend.categories.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request) {
        $category = new Category;
        $category->fill($request->except('_token'));
        ($request->is_active) ? $category->is_active = 1 : $category->is_active = 0;
        $category->save();
        $flash_message = [];
        $flash_message['class'] = 'success';
        $flash_message['body'] = "sucsses message add";
        return redirect(route('categories.index'))->with(['flash_message' => $flash_message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $category = Category::find($id);
        return view('backend.categories.view', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
        $category = Category::find($id);
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id) {
        //
        $category = Category::find($id);
        $category->fill($request->except('_token'));
        ($request->is_active) ? $category->is_active = 1 : $category->is_active = 0;
        $category->save();
        $flash_message = [];
        $flash_message['class'] = 'success';
        $flash_message['body'] = "Sucsses message edit";

        return redirect(route('categories.index'))->with(['flash_message' => $flash_message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        return Category::destroy($id);
    }

    public function adv_search(Request $request) {
        $categories = Category::orderBy('id','ASC');
        if ($request->title) {
            $categories = $categories->where('name', 'like', '%' . $request->name . '%');
        }
        $this->data['categories'] = $categories->paginate(50);
        return view('backend.categories.index', $this->data);
    }

}
