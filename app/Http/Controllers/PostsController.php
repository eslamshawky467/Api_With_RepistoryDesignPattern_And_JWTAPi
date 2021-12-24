<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Repository\PostsRepositoryInterface;
class PostsController extends Controller
{
    protected $Posts;

    public function __construct(PostsRepositoryInterface $Posts)
    {
        $this->Posts = $Posts;
    }


    public function index()
    {
        return $this->Posts->index();
    }


    public function create()
    {
        return $this->Posts->create();
    }


    public function store(StorePostRequest $request)
    {
        return $this->Posts->store($request);
    }


    public function show(Post $post)
    {
        //
    }


    public function edit($id)
    {
        return $this->Posts->edit($id);
    }


    public function update(StorePostRequest $request, $id)
    {

        return $this->Posts->update($request,$id);

    }


    public function destroy($id)
    {
        return $this->Posts->destroy($id);
    }
}
