<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Order extends Model {
    protected $fillable = ['invoice_no','customer_name','customer_phone','address','subtotal','delivery_charge','discount','total','status','payment_status','courier_name','tracking_code','notes'];
}
