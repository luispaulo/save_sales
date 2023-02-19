<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\PaymentMethod;

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

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

}
