<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{

    public function index(){
    //create new data
      return view('blog.create');
    }

    public function store(Request $request){

      //Validation
      $this->validate($request,[
        'title' => 'required',
        'content_text' => 'required',
        'cover'=>'required',
      ]);

      $path = "uploads"."/";
      if(!file_exists($path)){
        //Create the folder
        mkdir($path,8777, true);
      }

      $cover_name = uniqid();
      $request->cover->move($path, $cover_name);

      //Create new data
      $blog = new Blog;
      $blog->title = $request->title;
      $blog->content_text = $request->content_text;
      $blog->tag = $request->tag;
      $blog->path = $path.$cover_name;
      $blog->save();

      return redirect()->back();
    }
}
