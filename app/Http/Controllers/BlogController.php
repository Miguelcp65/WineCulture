<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{


    public function indexFrontend(Request $request)
    {
        $blogs = Blog::paginate(16);
        $blogtotall = $blogs->count();
        $categorias = Category::select('name')->get();
        $users = User::all();
        return view('paginas.frontend.blog', compact([
            'blogs',
            'categorias',
            'users',
            'blogtotall'
        ]));

        if ($request->ajax()) {

            return view('includes.frontend.listablog', compact([
                'blogs',
                'categorias',
                'users',
                'blogtotall'

            ]))->render();
        }

        return view('paginas.frontend.blog', compact([
            'blogs',
                'categorias',
                'users',
                'blogtotall'
        ]))->render();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $id_user_auth = Auth::id();
        $categories = Category::all();
        return view('paginas.backend.blog.index', compact([
            'blogs',
            'id_user_auth',
            'categories'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.blog.show', ['showBlog' => $blog], compact('blog', 'users', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $users = User::all();
        return view('paginas.backend.blog.edit', compact('categories', 'blog', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $fields = $request->validated();
        $blog->update($fields);

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/blog');
            $blog->img = basename($photo_path);
        }

        $blog->save();
        return redirect()->route('blog.index')
            ->with('success', 'Post was updated successfully', compact('blog'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete($blog);

        return redirect()->route('blog.index')->with('success', 'Post successfully deleted', compact('blog'));
    }
    public function store(StoreBlogRequest $request)
    {
        $fields = $request->validated();
        $blog = new Blog();
        $blog->fill($fields);

        if ($request->hasFile('img')) {
            $photo_path = $request->file('img')->store('public/blog');
            $blog->img = basename($photo_path);
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Post adicionada com sucesso');
    }

    public function previewBlog(blog $blog){
        $categories = Category::all();
        return view('paginas.frontend.previewblog', compact('categories', 'blog'));
    }

}
