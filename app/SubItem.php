<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{
  protected $fillable = [
      'subitem_name', 'url','item_id',
  ];

    public function item()
{

   return $this->belongsTo(Author::class, 'foreign_key','item_id');
}
}
