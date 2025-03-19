<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['customer_name', 'created_data', 'status','comment', 'product_id', 'total_price'];

    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
