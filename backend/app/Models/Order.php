<?php
namespace App\Models;

use App\Models\Order_Items;
use App\Models\Dining_Session;
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

    public function session()
    {
        return $this->belongsTo(Dining_Session::class, 'session_id');
    }

    public function items()
    {
        return $this->hasMany(Order_Items::class, 'order_number');
    }
}
