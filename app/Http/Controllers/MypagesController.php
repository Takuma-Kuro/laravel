<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mypage;
use Validator;


class MypagesController extends Controller
{
  //本ダッシュボード表示
  public function index(){
      
      
      $mypages = Mypage::orderBy('created_at','asc')->paginate(3);
    
        // dd($books);
    
    return view('main.mypages',[
        'mypages' => $mypages
        ]);
  }
  
  //登録処理
  public function store(Request $request){
      
      //バリデーションは必ずいれる
    $validator = Validator::make($request->all(), [
        'store_name' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）
    // Eloquent モデル
    $mypages = new Mypage;
//   dd($books);
    $mypages->store_name = $request->store_name; 
    $mypages->store_url = '1000';
    $mypages->store_address1 = '1000';
    $mypages->store_address2 = '1000';
    $mypages->ceo_name = '1000';
    $mypages->message = '1000';
    $mypages->maxvolume = '1000';
    $mypages->image = '1000';
    $mypages->image2 = '1000';
    $mypages->image3 = '1000';
    $mypages->published = '2017-03-07 00:00:00';
    $mypages->save(); 
    return redirect('/');


      
  }
  
  //登録画面表示
  public function edit(Mypage $mypage){
      return view('mypagesedit', ['mypage' => $mypage]);
      
      
      
  }
  
  //登録処理
  public function update(Request $request){
      $validator = Validator::make($request->all(), [
        'store_name' => 'required|max:255',
    ]);
    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    // Eloquent モデル
    $mypages = Mypage::find($request->id);
    $mypages->store_name = $request->store_name; 
    $mypages->store_url = '1000';
    $mypages->store_address1 = '1000';
    $mypages->store_address2 = '1000';
    $mypages->ceo_name = '1000';
    $mypages->message = '1000';
    $mypages->maxvolume = '1000';
    $mypages->image = '1000';
    $mypages->image2 = '1000';
    $mypages->image3 = '1000';
    $mypages->published = '2017-03-07 00:00:00';
    $books->save(); 
    return redirect('/');
      
      
  }
  
  //削除処理
  public function destroy(Mypage $mypage){
       $mypage->delete();       //追加
    return redirect('/');  //追加
      
      
  }
  
  
   
}
