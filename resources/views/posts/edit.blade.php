@extends('layout')

@section('content')
<div class="container my-4">
    <div class="border p-4">
       <h5 class="mb-4">
        投稿の編集
       </h5>
       <!-- {!!Form::open()!!} 適切なformを作成するテンプレートエンジン -->
            <div class="form-group">
            <!-- formのラベル↓ -->
             {!!Form::label('title','タイトル')!!}
             <!-- 値を保持するもの↓ -->
             {!!Form::text('title',old('title'),['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
             {!!Form::label('body','本文')!!}
             {!!Form::textarea('body',old('body'),['class'=>'form-control'])!!}
            </div>
            <div class="mt-4">
                <a class="btn btn-secondary" href="{{route('posts.show')}}">キャンセル</a>
                 {!!Form::submit('更新する',['class'=>'btn btn-primary'])!!}
            </div>
       {!!Form::close()!!}
    </div>
</div>

@endsection('content')