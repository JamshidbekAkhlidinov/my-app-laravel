<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use function Termwind\render;

class PostCategoryController extends Controller
{
    function index()
    {
        $categories = PostCategory::all();
        return view('post-category.index', compact('categories'));
    }

    function create(Request $request)
    {
        if ($request->post()) {
            $validated = $request->validate([
                'name' => 'required',
            ]);
            if ($request->request->get('status') == 'on') {
                $validated['status'] = 1;
            } else {
                $validated['status'] = 0;
            }
            PostCategory::create($validated);
            return redirect()->route('post.category.index');
        }
        return view('post-category.create');
    }


    function update($category)
    {
        $post = PostCategory::findOrFail($category);
        return view('post-category.update', compact('post'));
    }
    function updateReq(Request $request){
        $validated = $request->validate([
            'name' => 'required',
        ]);
        if($request['status'] == 'on'){
            $validated['status'] = 1;
        } else {
            $validated['status'] = 0;
        }
        $post = PostCategory::findOrFail($request['id']);
        $post->update($validated);
        return redirect()->route('post.category.index');

    }
    function view($id)
    {

    }

    function delete($category)
    {
        $post = PostCategory::findOrFail($category);
        $post->delete();
        return redirect()->route('post.category.index');
    }


}
