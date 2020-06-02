<!-- layout.blade.phpの継承 -->
@extends('layout')

<!-- layout.blade.phpの@yield('content')の部分に差し込む -->
@section('content')
    <div class="container mt-4">
        <div>
         <a class="btn btn-primary" href="">投稿の新規作成</a>
        </div>
    </div>
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h2>post title</h2>
            </div>
            <div class="card-body">
                <p>
                    Post body
                </p>
                <a class="card-link" href="{{route('posts.show')}}">
                    詳細をみる
                </a>
            </div>
            <div class="card-footer">
                <span>
                    投稿日時:2020-1-1
                </span>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="card">
            <div class="card-header">
                <h2>post title</h2>
            </div>
            <div class="card-body">
                <p>
                    Post body
                </p>
                <a class="card-link" href="">
                    詳細をみる
                </a>
            </div>
            <div class="card-footer">
                <span>
                    投稿日時:2020-1-1
                </span>
            </div>
        </div>
    </div>
@endsection('content')
<!-- layout.blade.phpの@yield('content')の部分に読み込む -->
