<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'products'  => Schema::hasTable('products') ? DB::table('products')->count() : 0,
            'contacts'  => Schema::hasTable('contacts') ? DB::table('contacts')->count() : 0,
            'sales'     => Schema::hasTable('transactions') ? (float) DB::table('transactions')->where('type', 'sell')->sum('final_total') : 0,
            'purchase'  => Schema::hasTable('transactions') ? (float) DB::table('transactions')->where('type', 'purchase')->sum('final_total') : 0,
            'invoices'  => Schema::hasTable('transactions') ? DB::table('transactions')->where('type', 'sell')->count() : 0,
            'suppliers' => Schema::hasTable('contacts') ? DB::table('contacts')->where('type', 'supplier')->count() : 0,
        ];

        $recentSales = collect();
        if (Schema::hasTable('transactions')) {
            $recentSales = DB::table('transactions')
                ->where('type', 'sell')
                ->select('id', 'invoice_no', 'final_total', 'payment_status', 'status', 'transaction_date')
                ->latest('id')
                ->limit(8)
                ->get();
        }

        $lowStock = collect();
        if (Schema::hasTable('products')) {
            $query = DB::table('products')->select('id', 'name');
            if (Schema::hasColumn('products', 'sku')) {
                $query->addSelect('sku');
            } else {
                $query->selectRaw("'' as sku");
            }
            if (Schema::hasColumn('products', 'alert_quantity')) {
                $query->addSelect('alert_quantity');
            } else {
                $query->selectRaw('0 as alert_quantity');
            }
            $lowStock = $query->limit(6)->get();
        }

        return view('erp.dashboard', compact('stats', 'recentSales', 'lowStock'));
    }
}
