<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsStories;

class NewsStoriesController extends Controller
{
    public function welcome()
    {
        $data = NewsStories::get();
        if(auth()->user()){    
            return view('home', compact('data'));
        } else {
            return view('welcome', compact('data'));
        }
    }

    public function json_api($id, Request $request)
    {
        //dd($id);
        //$test=$request->has('id') ? $request->get('id'):'';
        //dd($test);
        if (isset($id)){
            $data = NewsStories::where('id', $id)->first();
        //dd($data);
        return response()->json(['code' => 200, 'data' => $data], 200);
        } else {
            return response()->json(['code' => 500, 'data' => 'Data Not Found'], 200);
        }
    }

    public function xml_api($id, Request $request)
    {
        //dd($id);
        if (isset($id)){
            $data = NewsStories::where('id', $id)->first();
        //dd($data);
        return response($data, 200)
            ->header('Content-Type', 'xml');
        } else {
            return response($data, 200)
            ->header('Data Not Found', 'xml');
        }

    }
}
