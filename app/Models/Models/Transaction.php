<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'service',
        'sender_name',
        'sender_telephone',
        'destination',
        'receiver_name',
        'receiver_telephone',
        'currency',
        'amount',
        'exchange_rate',
        'total_amount',
    ];
}
