<?php
namespace App\Repository;
use App\Models\Post;
class PostsRepository implements PostsRepositoryInterface{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store($request)
    {
        try {
            Post::create($request->all());
            return redirect()->back()->with('success', 'Data saved successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function edit($id)
    {
        $post = Post::findorFail($id);
        return view('posts.edit', compact('post'));
    }
    public function show($post){
    }

    public function update ($request, $id)
    {

        try {
            $post = Post::findorFail($id);

            $post->update($request->all());

            return redirect()->back()->with('edit', 'Data Updated successfully');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy($id)
    {
        try {

            Post::destroy($id);
            return redirect()->back()->with('delete', 'Data has been deleted successfully');

        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
