<?php

use Illuminate\Support\Facades\Route;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use  App\Models\Category;

use  App\Models\Mechanic;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //one to one
    $phone=User::find(1);
    $phone=User::find(2)->phone;
    //return $phone;

    $user=Phone::find(1);
    $user=Phone::find(2)->user;
    //return $user;
    $users=User::all();
    //return $users;
    //return view('welcome',compact('users'));
    //one to many
    $comments= Post::find(1);

    $comments= Post::find(1)->comments;
    //return $comments;
    $post= Comment::find(1);

    $post= Comment::find(1)->post;
    //return $post;
    $posts=Post::with('comments')->get();
   // return $posts;
  
   // return view('welcome',compact('posts'));
 //many to many
$posts=Post::find(1);
$posts=Post::all();
$posts=Post::with('categories')->get();

//return $posts;
//return view('welcome',compact('posts'));
$categories=Category::with('posts')->get();
//return view('welcome',compact('categories'));


//hasonethrough
//$mechanics=Mechanic::all();
$mechanics=Mechanic::with('carOwner')->get();                                
return $mechanics;
});
