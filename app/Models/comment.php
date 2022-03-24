<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    protected $fillable = ['book_id','comment'];
}
