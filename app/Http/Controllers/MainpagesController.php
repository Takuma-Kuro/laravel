<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mainpage;
use Validator;


class MainpagesController extends Controller
{
  //本ダッシュボード表示
  public function memo(){
      
      
      // $timelines = Timeline::orderBy('created_at','asc')->paginate(3);
    
        // dd($books);
    // ,[
    //     'timelines' => $timelines
    //     ]
    return view('main.mainpages');
  }
  
//   //登録処理
//   public function store(Request $request){
      
//       //バリデーションは必ずいれる
//     $validator = Validator::make($request->all(), [
//         'item_name' => 'required|max:255',
//     ]);
//     //バリデーション:エラー 
//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
//     //以下に登録処理を記述（Eloquentモデル）
//     // Eloquent モデル
//     $books = new Book;
// //   dd($books);
//     $books->item_name = $request->item_name; 
//     $books->item_number = '1';
//     $books->item_amount = '1000';
//     $books->published = '2017-03-07 00:00:00';
//     $books->save(); 
//     return redirect('/');


      
//   }
  
//   //登録画面表示
//   public function edit(Book $book){
//       return view('booksedit', ['book' => $book]);
      
      
      
//   }
  
//   //登録処理
//   public function update(Request $request){
//       $validator = Validator::make($request->all(), [
//         'item_name' => 'required|max:255',
//     ]);
//     //バリデーション:エラー 
//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
//     // Eloquent モデル
//     $books = Book::find($request->id);
//     $books->item_name = $request->item_name;
//     $books->item_number = '1';
//     $books->item_amount = '1000';
//     $books->published = '2017-03-07 00:00:00';
//     $books->save(); 
//     return redirect('/');
      
      
//   }
  
//   //削除処理
//   public function destroy(Book $book){
//       $book->delete();       //追加
//     return redirect('/');  //追加
      
      
//   }
  
  
   
}
