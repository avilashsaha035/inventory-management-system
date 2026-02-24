<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','quantity','discount','vat', 'total_amount','customer_payment','due_amount','sale_date'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
