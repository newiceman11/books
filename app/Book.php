<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

      protected $fillable = [
     'title','author_id','description','pdf_file',
    ];

    public function authors()
{
   return $this->belongsTo(Author::class, 'foreign_key','author_id');
}
}
