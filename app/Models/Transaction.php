<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = [
        'payer', 'payee','value', 'status'
    ];

    protected $attributes = [
        'value' => 0,
        'status' => 0
    ];
}
