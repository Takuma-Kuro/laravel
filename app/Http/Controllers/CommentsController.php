<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Validator;


class CommentsController extends Controller
{
  //本ダッシュボード表示
  public function index(){
      
      
      // $timelines = Timeline::orderBy('created_at','asc')->paginate(3);
    
        // dd($books);
    // ,[
    //     'timelines' => $timelines
    //     ]
    return view('main.comments');
  }
}