<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * 显示创建博客文章的表单。
     *
     * @return Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * 保存一个新的博客文章。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // 验证以及保存博客发表文章
        $this->validate($request, [
               'name' => 'bail|required|max:2',
               'email' => 'required',
               'password' => 'required',
               'password_confirmation' => 'required',
           ]);
    }
}
