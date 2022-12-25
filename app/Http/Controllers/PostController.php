<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index ()
   {

    //$post =Post::all();
      $post =Post::simplepaginate(10);

      return view('posts.index',['posts'=>$post]);
   }
   public function create()
   {
       return view('posts.create',['users'=>User::all()]);
   }
    public function store(StorePostRequest $requestdata)
    {

    $data =  $requestdata->all();
    ###### validation #######
//     $requestdata->validate([
//        'title' => ['required' , 'min:3'],
//        'description'=>'required'
//    ],[
//        'title.required'=>'please enter this field'  ## change logic massage error ##
//    ]);

     // insert //
        Post::create(
            [
            'title'=>$data['title'],
            'description'=>$data['description'],
            'user_id'=>$data['postcreator']
        ]
        );
      return  redirect()->route('posts.index');
    }
   public function show($id)
   {
       $post =Post::find($id);
       return view('posts.show',['posts'=>$post]);
   }

   public function edit(Post $id)
   {
      return view('posts.edit',compact('id'));
   }

   public function update(Request $requestdata, Post $id)
   {
    $id->update($requestdata->all());
    return redirect()->route('posts.index');
   }
   public function destory(Post $id)
   {
   $id->delete();
   return redirect()->route('posts.index');
   }
}
