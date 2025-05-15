<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','name','email','address','payment_type','total_amount'
    ];
    public function items(){
        return $this->hasMany(OrderItem::class);
    }
}
