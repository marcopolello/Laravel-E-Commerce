<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'first_name_receiver',
    'last_name_receiver',
    'email_receiver',
    'phone_receiver',
    'comment_receiver',
    'address_receiver',
    'payment_state',
    'total_price',
  ];

  public function user(){
    return $this -> belongsTo(User::class);
  }
}
