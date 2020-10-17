<!-- resources/views/books.blade.php -->
@extends('layouts.app')

@section('content')

    <div class="card-body">
        <div class="card-title">
          　魅力的な店を登録してね<br>
          　*写真の1枚目がタイムラインに表示されます
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        <!-- 本登録フォーム -->
        <form action="{{ url('mypages') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- 本のタイトル -->

             <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="店名">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="店URL">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <p>
                        <select class="form-control">
                            <option>&nbsp;</option><option>北海道</option><option>青森県</option>
                            <option>岩手県</option><option>宮城県</option><option>秋田県</option>
                            <option>山形県</option><option>福島県</option><option>茨城県</option>
                            <option>栃木県</option><option>群馬県</option><option>埼玉県</option>
                            <option>千葉県</option><option>東京都</option><option>神奈川県</option>
                            <option>新潟県</option><option>富山県</option><option>石川県</option>
                            <option>福井県</option><option>山梨県</option><option>長野県</option>
                            <option>岐阜県</option><option>静岡県</option><option>愛知県</option>
                            <option>三重県</option><option>滋賀県</option><option>京都府</option>
                            <option>大阪府</option><option>兵庫県</option><option>奈良県</option>
                            <option>和歌山県</option><option>鳥取県</option><option>島根県</option>
                            <option>岡山県</option><option>広島県</option><option>山口県</option>
                            <option>徳島県</option><option>香川県</option><option>愛媛県</option>
                            <option>高知県</option><option>福岡県</option><option>佐賀県</option>
                            <option>長崎県</option><option>熊本県</option><option>大分県</option>
                            <option>宮崎県</option><option>鹿児島県</option><option>沖縄県</option>
                        </select>
                     </p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="以下住所">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="代表者名">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8">
                   <textarea class="form-control" rows="7" placeholder="店からのメッセージ"></textarea>
                </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <span class="btn btn-primary btn-embossed btn-file">
                <span class="fileinput-new"><span class="fui-upload"></span>&nbsp;&nbsp;Attach File</span>
                <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                <input type="file" name="...">
              </span>
              <span class="fileinput-filename"></span>
              <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
            </div>
            </div>
            <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <span class="btn btn-primary btn-embossed btn-file">
                <span class="fileinput-new"><span class="fui-upload"></span>&nbsp;&nbsp;Attach File</span>
                <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                <input type="file" name="...">
              </span>
              <span class="fileinput-filename"></span>
              <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
            </div>
          </div>
        <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <span class="btn btn-primary btn-embossed btn-file">
                <span class="fileinput-new"><span class="fui-upload"></span>&nbsp;&nbsp;Attach File</span>
                <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                <input type="file" name="...">
              </span>
              <span class="fileinput-filename"></span>
              <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
            </div>
            </div>
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

    
@endsection