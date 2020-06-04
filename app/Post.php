<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model //モデルで使うパラメータの設定
{
    protected $fillable =[
        'title',
        'body',
    ];
}
