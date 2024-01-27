<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostrequest;
use App\Http\services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @var BlogService
     */
    private BlogService $service;

    /**
     * Constructor
     *
     * @param BlogService $service
     */
    public function __construct(BlogService $service)
    {
        $this->service=$service;
    }

    public function create (BlogPostrequest $request)
    {
        $data = $request->validated();

        $this->service->create($data);

        return redirect()->route('home')->with('success','Блог успешно сохранено');
    }

    public function myblog()
    {
        $user = auth()->user()->email;
        $data = $this->service->myblog();
        return view('my-blog', compact('data'));
    }
}



