<?php
namespace App\Models;

use App\Models\Categories;
use App\Models\Order_Items;
use App\Models\Menu_Package;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'image',
        'is_available',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function menupackage()
    {
        return $this->hasMany(Menu_Package::class, 'menu_id');
    }

    public function orderItems()
    {
        return $this->hasMany(Order_Items::class, 'menu_id');
    }

}
