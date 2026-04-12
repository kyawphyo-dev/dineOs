<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

$table->id();
$table->foreignId('order_number')->constrained('orders')->onDelete('cascade');
$table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
$table->integer('quantity');
$table->decimal('total', 8, 2);
$table->text('notes')->nullable();
$table->timestamps();
class Order_Items extends Model
{
    protected $fillable = [
        'order_number',
        'menu_id',
        'quantity',
        'total',
        'notes',
    ];
}
