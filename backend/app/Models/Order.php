<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

$table->id();

class Order extends Model
{
    protected $fillable = [
        'session_id',
        'order_number',
        'status',
        'notes',
    ];
}
