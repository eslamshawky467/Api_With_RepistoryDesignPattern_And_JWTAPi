<?php

namespace App\Repository;

interface PostsRepositoryInterface{
    public function index();
    public function create();
    public function store($request);
    public function show($post);
    public function edit($id);
    public function update($request, $id);
    public function destroy($id);
}


