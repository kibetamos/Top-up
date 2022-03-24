<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable =[
        'title','author','description'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
