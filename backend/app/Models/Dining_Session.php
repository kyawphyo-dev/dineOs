<?php
namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Tables;
use App\Models\Packages;
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

    public function table()
    {
        return $this->belongsTo((Tables::class), 'table_id');
    }

    public function package()
    {
        return $this->belongsTo((Packages::class), 'package_id');
    }

    public function user()
    {
        return $this->belongsTo((User::class), 'started_by');
    }

    public function orders()
    {
        return $this->hasMany((Order::class), 'session_id');
    }
}
