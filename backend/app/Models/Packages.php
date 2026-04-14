<?php
namespace App\Models;

use App\Models\Menu_Package;
use App\Models\Dining_Session;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_minutes',
    ];

    public function session()
    {
        return $this->hasMany(Dining_Session::class, 'package_id');
    }

    public function menupackage()
    {
        return $this->hasMany(Menu_Package::class, 'package_id');
    }
}
