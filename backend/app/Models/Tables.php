<?php
namespace App\Models;

use App\Models\Dining_Session;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $fillable = [
        'table_number',
        'qr_code',
        'capacity',
        'status',
    ];

    public function session()
    {
        return $this->hasOne(Dining_Session::class, 'table_id');
    }

}
