<!-- resources/views/books.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Bootstrapの定形コード… -->
    <link href="../../dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="../../dist/favicon.ico">

        
     <!-- 現在の本 -->
    @if (count($books) > 0)
        <div class="card-body">
            <div class="card-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>　L　I　S　T　</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <!-- 本タイトル -->
                                <td class="table-text">
                                    <div>{{ $book->item_name }}</div>
                                </td>
                                
                                <td>
	<form action="{{ url('booksedit/'.$book->id) }}" method="POST"> {{ csrf_field() }}
	    <button type="submit" class="btn btn-primary">Update </button>
	</form>
</td>
                                
			        <!-- 本: 削除ボタン -->
                                <td>
                                    <form action="{{ url('book/'.$book->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
    <!-- Book: 既に登録されてる本のリスト -->
    <div class="row">
    	<div class="col-md-4 offset-md-4">
    		{{ $books->links()}}
        </div>
    </div>
    
@endsection