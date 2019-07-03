<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = [
 'item_name','url',
];
public function sub_items(){
        return $this->hasMany(SubItem::class);
    }
}
