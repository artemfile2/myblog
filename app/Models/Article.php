<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'text', 'idUser'];
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }


}
