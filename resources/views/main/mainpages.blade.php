@extends('layouts.app')

@section('content')


    <div class="container">
      
      <div class="row">
        <div class="col-md-12">
          <h4>SELECT PAGE</h4>
          <p>
            <!-- Standard gray button with gradient -->
            <button type="button" class="btn btn-default" onclick="location.href='{{url("/mypages")}}'">紹介ページ登録</button>

            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            <button type="button" class="btn btn-primary" onclick="location.href='#'">紹介ページ編集</button>

            <!-- Indicates a successful or positive action -->
            <button type="button" class="btn btn-success" onclick="location.href='#'">口座登録</button>

            <!-- Contextual button for informational alert messages -->
            <button type="button" class="btn btn-info" onclick="location.href='#'">口座編集</button>

            <!-- Indicates caution should be taken with this action -->
            <button type="button" class="btn btn-warning" onclick="location.href='#'">振込申込</button>

            <!-- Indicates a dangerous or potentially negative action -->
            <button type="button" class="btn btn-danger" onclick="location.href='#'">マイページ削除</button>

            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
            <button type="button" class="btn btn-link" onclick="location.href='{{url("/")}}'">HOME</button>
          </p>
        </div>
      </div>
      
    </div>

@endsection
