<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentMethod;
use App\Models\User;

class ProductSale extends Model
{
    use HasFactory;

    protected $table = 'product_sales';

    protected $fillable = [
        'description',
        'price',
        'employee_id',
        'payment_method_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

}
