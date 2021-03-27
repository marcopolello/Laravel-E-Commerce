<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name',
    'slug',
    'details',
    'price',
    'description',
    'photo',
  ];

  public function categories(){
    return $this -> belongsToMany(Category::class);
  }

  public function orders(){
    return $this -> belongsToMany(Order::class);
  }


}
