<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSale;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'cpf',
        'birth_date',
        'commission'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];

    public function productSales()
    {
        return $this->hasMany(ProductSale::class);
    }
}
