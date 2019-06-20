<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $fillable = [
 'name','last name'
];
public function authorHasMany()
{
   return $this->hasMany(Book::class);
}
}
