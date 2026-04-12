<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dining_Session extends Model
{
    protected $fillable = [
        'table_id',
        'package_id',
        'started_by',
        'started_at',
        'ended_at',
        'status',
        'payment_status',
    ];
}
