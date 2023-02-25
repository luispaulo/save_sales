<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'cnpj',
        'status',
        'start_date',
        'end_date',
        'theme_color',
        'contact'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
