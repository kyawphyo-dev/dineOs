<?php
namespace App\Models;

use App\Models\Menu;
use App\Models\Packages;
use Illuminate\Database\Eloquent\Model;

class Menu_Package extends Model
{
    protected $fillable = [
        'menu_id',
        'package_id',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}
