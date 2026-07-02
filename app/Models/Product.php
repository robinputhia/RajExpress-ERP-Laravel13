<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $fillable = ['name','slug','sku','price','offer_price','stock','plant_age','plant_height','pot_size','fruiting_time','origin_country','description','status'];
}
