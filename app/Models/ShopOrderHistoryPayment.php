<?php
#app/Models/ShopOrderHistory.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopOrderHistoryPayment extends Model
{
    public $table = SC_DB_PREFIX.'shop_order_history_payment';
}