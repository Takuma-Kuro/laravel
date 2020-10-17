@extends('layouts.user.app')

@section('content')



    
    



  
    <div class="container">
      
      
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="Search..." id="inputSuccess">
            <div>
            <button  type="submit" class="btn btn-success">検索</button>
            </div>
          </div>
          <!-- /.form-group -->
        </div>
      </div>

      
      
      <div class="row h-50">
        <div class="col-sm-5 col-md-3 h-50">
          <div class="thumbnail">
            <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
              <p><strong>ザ　レイクビュー　ＴＯＹＡ　乃の風リゾート</strong></p>
              <p><small></small></p>
              <p><small>＜ただいま大浴場1か所修繕工事中です＞◆大切な記念日でのご宿泊に人気の温泉リゾート。全個室の「乃の風茶寮」と、シックな雰囲気...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3 h-50">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>ザ・レイクスイート湖の栖&emsp;&emsp;&emsp;</strong></p>
            <p><small></small></p>
            <p><small>すべての客室に温泉露天風呂＆テラスを完備。最上階の露天風呂は湖に向かって突き出した構造となっており湖上に浮かび空に寛ぐ至福の...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3 h-50">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>緑の風リゾート　きたゆざわ</strong></p>
            <p><small></small></p>
            <p><small>市街地の喧騒を忘れ、大自然の中で息抜きしませんか。5周年記念や早期割プランもお勧め／ ４年連続じゃらんアワード売れた宿2016～19...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3 h-50">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>洞爺サンパレス　リゾート＆スパ</strong></p>
            <p><small></small></p>
            <p><small>徹底した衛生管理と新たなコンセプトのもと、洞爺湖の絶景と五感を満たすビュッフェレストラン「パレシオグランデ」オープン。 ～8/31...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>洞爺湖万世閣ホテルレイクサイドテラス</strong></p>
            <p><small></small></p>
            <p><small>2019年5月、大浴場「月の湯」が 本場フィンランドの大型サウナストーブを導入し「我慢しないサウナ」が登場！ インフィニティ露天風呂...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div><div class="col-sm-5 col-md-3">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>きたゆざわ　森のソラニワ&emsp;&emsp;&emsp;</strong></p>
            <p><small></small></p>
            <p><small>森の中のアスレチックパークなど、お子様連れで楽しめるアクティビティが満載！ 「じゃらんアワード2019　じゃらん OF THE YEAR　売れ...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>ザ・ウィンザーホテル洞爺リゾート＆スパ</strong></p>
            <p><small></small></p>
            <p><small>標高625m ポロモイ山山頂に位置 ■唯一洞爺湖と内浦湾を眼下に望む。運が良ければ神秘的な雲海に感動 ■スパ、ゴルフ、乗馬、スキーなど...
              </small></p>
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-3">
          <div class="thumbnail">
                        <div class="mx-auto">
              <div id="main_visual" class="carousel slide" data-ride="carousel" >
              <!-- インジケーター -->
                <ol class="carousel-indicators">
                  <li data-target="#main_visual" data-slide-to="0" class="active"></li>
                  <li data-target="#main_visual" data-slide-to="1"></li>
                  <li data-target="#main_visual" data-slide-to="2"></li>
                </ol>
            <!-- / インジケーター -->
            <!-- カルーセル内枠 -->
                <div class="carousel-inner">
              <!-- スライド01 -->
                  <div class="carousel-item active">
                    <img src="{{ asset('/img/IMG_1841.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　              <img src="{{ asset('/img/IMG_1852.jpeg') }}" alt="">
                  </div>
                  <div class="carousel-item">
     　               <img src="{{ asset('/img/IMG_1662.jpeg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="caption">
            <p><strong>絶景の湯宿　洞爺湖畔亭&emsp;&emsp;&emsp;</strong></p>
            <p><small></small></p>
            <p><small>旬の食材満載「秋の味覚バイキング」プランは9～11月限定★毛蟹1杯付きや飲み放題60分付き、高層階の湖側和洋室確約などバリエーション...
              <div class="btn-toolbar">
              <div class="btn-group">
                <p><a role="button" class="btn btn-info" href="#"　onclick="">Apple Pay</a></p>
                
                <p><a role="button" class="btn btn-primary" href="{{ url('/comments') }}">詳細</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
      
      
      
      <!--<div class="mx-auto">-->
        <div class="pagination pagination-minimal mx-auto">
        
            <ul>
              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
              <li class="active"><a href="#fakelink">1</a></li>
              <li><a href="#fakelink">2</a></li>
              <li><a href="#fakelink">3</a></li>
              <li><a href="#fakelink">4</a></li>
              <li><a href="#fakelink">5</a></li>
 
              <li class="pagination-dropdown dropup">
                <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fui-triangle-up"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#fakelink">5–10</a></li>
                  <li><a href="#fakelink">10–20</a></li>
                  <li><a href="#fakelink">20–30</a></li>
                  <li><a href="#fakelink">40–50</a></li>
                </ul>
              </li>
              <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
            </ul>
            <!--</div>-->
          </div>
          </div>

     
    </div>

   
@endsection