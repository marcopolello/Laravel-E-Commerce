<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  function asDollars() {
    // dd($this->price);
    if ($this->price<0) return "-".asDollars(-$this->price);
    return '$' . number_format($this->price / 100 , 2);
  }
}
