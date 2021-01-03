<?php

namespace SoftwaresCares\SuperBlog\Http\Controllers;

use Illuminate\Http\Request;

use SoftwaresCares\SuperBlog\Models\Post;

use SoftwaresCares\SuperBlog\Models\Category;

use SoftwaresCares\SuperBlog\Models\Media;

use SoftwaresCares\SuperBlog\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function posts()
    {
        $posts = Post::all();
        return response()->json($posts,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->post = $request->post;
        $post->save();
        
    }
    /**
     * Show post
    */

    public function showPost($id)
    {
        $post = Post::find($id);
        return response()->json($post,200);
    }

    //update post thumnail
    public function updatePostThumbnail(Request $request, $id)
    {
        $thumbnail = Media::find($request->thumbnail);
        //dd($thumbnail->location);
        $post = Post::find($id);
        $post->thumbnail = $thumbnail->location;
        $post->update();   
    }


        /**
     * Update Category Details
    */
    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = $request->category;
        $post->update();   

    }

    public function updatePostContent(Request $request, $id)
    {
        $post = Post::find($id);
        $post->post = $request->post;
        $post->update();   

    }

    /**
     * Delete post
    */
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();     
    }

    /**
     * Display Post By Category
    */
    /**
     * Show Category
    */

    public function displayPostByCategory(Request $request)
    {
        //dd($request->category);
        $post = Post::where('category',$request->category)->paginate($request->pagination);
        //$post = Post::paginate(3);
        //return response()->json($post,200);
        return PostResource::collection($post);
    }
    /******* Categories *******/

    /**
     * Fetch Categories
     */
    public function categories()
    {
        $categories = Category::all();
        return response()->json($categories,200);
    }

    /**
     * Create Category
     *
     */
    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category->category = $request->category;
        $category->description = $request->description;
        $category->save();   
    }

    /**
     * Show Category
    */

    public function showCategory($id)
    {
        $category = Category::find($id);
        return response()->json($category,200);
    }

    /**
     * Update Category Details
    */
    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category = $request->category;
        $category->description = $request->description;
        $category->update();   

    }
    /**
     * Delete Category
    */
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();     
    }

    //Display posts
    public function displayPost()
    {
        return view('superblog::Plugins.Display.display');        
    }

    //update post thumnail
    public function updateCategoryThumbnail(Request $request, $id)
    {
        $thumbnail = Media::find($request->thumbnail);
        //dd($thumbnail->location);
        $category = Category::find($id);
        $category->thumbnail = $thumbnail->location;
        $category->update();   
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
