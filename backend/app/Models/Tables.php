<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $fillable = [
        'table_number',
        'qr_code',
        'capacity',
        'status',
    ];
}
