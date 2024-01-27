<?php

namespace App\Http\services;

use App\Models\BlogModel;

class BlogService
{


    /**
     * @param array $data
     * @return BlogModel
     */
    public function create(array $data): BlogModel
    {

        $blogData['message']   = $data['message'];
        $blogData['name']      = auth()->user()->name;
        $blogData['email']     = auth()->user()->email;

        return BlogModel::create($blogData);
    }

    /**
     * MyBlog
     *
     *
     */

    public function myblog()
    {
        return BlogModel::where('email', auth()->user()->email)->get();
    }
}
