<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Postrequest;
use Illuminate\Support\Facades\Validator;

use function Ramsey\Uuid\v1;

class PostCOntroller extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }
    public function store(Postrequest $request){
        // $request->validate([
        // //     'title'=>'required',
        // //     'body'=>'required|min:5'
        // // ],[
        // //     'title.required'=>'ခေါင်းစဥ်ထည့်',
        // //     'body.required'=>'စာသားထည့်',
        // //     'body.min'=>'နည်းဆူ'
        // // ]);
             $this->myvalidate($request);

            // $validator = Validator::make($request->all(),[
            //     'title'=>'required',
            //     'body'=>'required'
            // ]);

            // if ($validator->fails()) {
            //     return redirect('/posts/create')->withErrors($validator)->withInput();
            // }
        
        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->created_at = now();
        $post->updated_at = now();
        $post->save();

        return redirect('/posts');
    }

   public function update(Postrequest $request,$id){

        // $request->validate([
        //     'title'=>'required',
        //     'body'=>'required|min:5'
        // ],[
        //         'title.required'=>'ခေါင်းစဥ်ထည့်',
        //         'body.required'=>'စာသားထည့်',
        //         'body.min'=>'နည်းဆူ'
        //     ]);
         $this->myvalidate($request);

        
       $post = Post::find($id);
       $post->title = request('title');
       $post->body = request('body');
       $post->updated_at = now();
       $post->save();

       return redirect('posts');
   }

   public function create(){
       return view('posts.create');
   }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    public function destroy($id){
        Post::destroy($id);

        return redirect('posts');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function myvalidate($request){

        $request->validate([
            'title'=>'required',
            'body'=>'required|min:5'
        ],[
                'title.required'=>'ခေါင်းစဥ်ထည့်',
                'body.required'=>'စာသားထည့်',
                'body.min'=>'နည်းဆူ'
            ]);
    }
}
