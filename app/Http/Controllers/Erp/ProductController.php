<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductController extends Controller
{
    public function index()
    {
        $products = collect();

        if (Schema::hasTable('products')) {
            $query = DB::table('products');

            if (Schema::hasColumn('products', 'name')) {
                $query->addSelect('name');
            } else {
                $query->selectRaw("'' as name");
            }

            if (Schema::hasColumn('products', 'sku')) {
                $query->addSelect('sku');
            } else {
                $query->selectRaw("'' as sku");
            }

            if (Schema::hasColumn('products', 'selling_price')) {
                $query->addSelect('selling_price');
            } elseif (Schema::hasColumn('products', 'sell_price')) {
                $query->addSelect(DB::raw('sell_price as selling_price'));
            } else {
                $query->selectRaw('0 as selling_price');
            }

            if (Schema::hasColumn('products', 'current_stock')) {
                $query->addSelect('current_stock');
            } else {
                $query->selectRaw('0 as current_stock');
            }

            if (Schema::hasColumn('products', 'alert_quantity')) {
                $query->addSelect('alert_quantity');
            } else {
                $query->selectRaw('0 as alert_quantity');
            }

            $products = $query->latest('id')->limit(100)->get();
        }

        return view('erp.products', compact('products'));
    }
}
