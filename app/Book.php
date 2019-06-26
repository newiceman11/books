<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

      protected $fillable = [
     'title','author_id','description','profile_image',
    ];

    public function authors()
{
   return $this->belongsTo(Author::class, 'foreign_key','author_id');
}
}
