<?php
/**
 * Sugar is a blogger based on the Laravel framework
 * Sugar is an ultimate blog product
 * Sugar can keep you focused on writing
 * You only need to write, the other to the sugar
 * The Sugar is open-sourced software licensed under the MIT license.
 * Copyright (c) 2017.
 *
 * @author jhasheng@hotmail.com
 */

namespace App\Http\Controllers\Backend;

use App\Http\Requests\PostRequest;
use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $postRepository;

    /**
     * PostController constructor.
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * 后台文章列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->paginate(1);
        return view('post.index', compact('posts'));
    }

    /**
     * 撰写文章页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 保存新文章
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $this->postRepository->create($request->all());
        return redirect(route('post.index'));
    }

    /**
     * 查看新文章
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * 编辑文章页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * 更新文章
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $this->postRepository->updateRich($request->all(), $id);
        return redirect(route('post.index'));
    }

    /**
     * 删除文章
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect(route('post.index'));
    }
}
