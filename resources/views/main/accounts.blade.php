<!-- resources/views/books.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Bootstrapの定形コード… -->
    <link href="../../dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="../../dist/favicon.ico">
    <div class="card-body">
        <div class="card-title">
          　口座番号登録お願いします。
          　振込申請をしていただければ口座へ入金されます。
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- 本のタイトル -->

             <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="銀行名">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="支店名">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-8">
                    <div class="form-group">
                <div class="col-sm-2">
                    <p>
                        <select class="form-control">
                            <option>口座種類</option>
                            <option>普通預金</option>
                            <option>当座預金</option>
                        </select>
                     </p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="口座番号">
                </div>
            </div>
            
            
           

            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="button" class="btn btn-embossed btn-info">
                        Save
                    </button>
                </div>
            </div>
        </form>
        
     <!-- 現在の本 -->
<!--    @if (count($books) > 0)-->
<!--        <div class="card-body">-->
<!--            <div class="card-body">-->
<!--                <table class="table table-striped task-table">-->
                    <!-- テーブルヘッダ -->
<!--                    <thead>-->
<!--                        <th>　L　I　S　T　</th>-->
<!--                        <th>&nbsp;</th>-->
<!--                    </thead>-->
                    <!-- テーブル本体 -->
<!--                    <tbody>-->
<!--                        @foreach ($books as $book)-->
<!--                            <tr>-->
                                <!-- 本タイトル -->
<!--                                <td class="table-text">-->
<!--                                    <div>{{ $book->item_name }}</div>-->
<!--                                </td>-->
                                
<!--                                <td>-->
<!--	<form action="{{ url('booksedit/'.$book->id) }}" method="POST"> {{ csrf_field() }}-->
<!--	    <button type="submit" class="btn btn-primary">Update </button>-->
<!--	</form>-->
<!--</td>-->
                                
			        <!-- 本: 削除ボタン -->
<!--                                <td>-->
<!--                                    <form action="{{ url('book/'.$book->id) }}" method="POST">-->
<!--                                        {{ csrf_field() }}-->
<!--                                        {{ method_field('DELETE') }}-->
<!--                                        <button type="submit" class="btn btn-danger">-->
<!--                                            Delete-->
<!--                                        </button>-->
<!--                                    </form>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        @endforeach-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    @endif-->
<!--    </div>-->
    <!-- Book: 既に登録されてる本のリスト -->
<!--    <div class="row">-->
<!--    	<div class="col-md-4 offset-md-4">-->
<!--    		{{ $books->links()}}-->
<!--        </div>-->
<!--    </div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!-- Bootstrap 4 requires Popper.js -->
    <script src="https://unpkg.com/popper.js@1.14.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>

    <script src="../../dist/scripts/flat-ui.js"></script>

    <script src="../assets/js/application.js"></script>
    
@endsection