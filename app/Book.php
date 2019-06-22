<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

      protected $fillable = [
     'title','author_id','description',
    ];

    public function bookBelongTo()
{
   return $this->belongsTo(Author::class);
}
}
