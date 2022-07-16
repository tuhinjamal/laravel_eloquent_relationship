<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Owner;
use App\Models\Car;
use App\Models\Mechanic;
use App\Models\Country;


Route::get('/', function () {
    //this is one to one 
    $user = Phone::find(1);
    $user = Phone::find(2)->user;
    //return $user;
    $users = User::all();
    return view('welcome',compact('users'));
});

Route::get('/inverse_one_to_one', function () {
    $phone = User::find(1);
    $phone = User::find(2)->phone;
   // return $phone; 
    $phone = Phone::all();
    //return $phone;
    return view('inverse_one_to_one',compact('phone'));
});


Route::get('/oneToMany', function () {

  $post =  Post::find(1);
  $post =  Post::find(1)->comments;
   $posts = Post::with('comments')->withCount('comments')->get();
   //return $posts;
   return view('oneToMany',compact('posts'));
});


Route::get('/inverse_oneToMany', function () {

    $comments = Comment::find(1);
    $comments = Comment::find(4)->post;
    $comment = Comment::get();
    //return $comment;
    return view('inverse_oneToMany',compact('comment'));
     
  });




Route::get('/manyToMany', function () {
 
     $posts = Post::with('categories')->withCount('categories')->get();
     //return $posts;
      return view('manyToMany',compact('posts'));
  });

  Route::get('/inverse_manyToMany', function () {

    $categories =  Category::with('posts')->withCount('posts')->get();
  
     //return $categories;
      return view('inverse_manyToMany',compact('categories'));
  });


  Route::get('/manyToMany', function () {
 
    $posts = Post::with('categories')->withCount('categories')->get();
    //return $posts;
     return view('manyToMany',compact('posts'));
 });

 Route::get('/has_one_through', function () {
    $mechanics = Mechanic::with('carOwner')->get();
    //return $mechanics;
     return view('has_one_through',compact('mechanics'));
 });


 Route::get('/has_many_through', function () {
    $countries = Country::with('posts')->get();
   // return $countries;
     return view('has_many_through',compact('countries'));
 });


   

