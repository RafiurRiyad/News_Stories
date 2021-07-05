<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsStories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = NewsStories::orderBy('published_date','desc')->paginate(4);
        return view('home', compact('data'));
    }

    public function addPostForm(Request $request)
    {
        return view('add');
    }

    public function savePost(Request $request)
    {
        $model = new NewsStories();
        $model->title = $request->get('title');
        $model->body = $request->get('body');
        $model->publisher = $request->get('publisher');
        $model->published_date = $request->get('published_date');
        $model->save();
        return redirect('/home');
    }

    public function editPostForm($id, Request $request)
    {
        $data = NewsStories::where('id', $id)->first();
        return view('edit', compact('data'));
    }

    public function editPost(Request $request)
    {
        $model = NewsStories::where('id', $request->get('id'))->first();
        $model->title = $request->get('title');
        $model->body = $request->get('body');
        $model->publisher = $request->get('publisher');
        $model->published_date = $request->get('published_date');
        $model->save();
        return redirect('/home');
    }

    public function deletePost($id, Request $request)
    {
        $model = NewsStories::where('id', $id)->first();
        
        $model->delete();
        return redirect('/home');
    }
}
