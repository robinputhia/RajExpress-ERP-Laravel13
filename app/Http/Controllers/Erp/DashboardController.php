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
            'products' => Schema::hasTable('products') ? DB::table('products')->count() : 0,
            'sales' => Schema::hasTable('transactions') ? DB::table('transactions')->where('type', 'sell')->sum('final_total') : 0,
            'purchase' => Schema::hasTable('transactions') ? DB::table('transactions')->where('type', 'purchase')->sum('final_total') : 0,
            'contacts' => Schema::hasTable('contacts') ? DB::table('contacts')->count() : 0,
        ];

        return view('erp.dashboard', compact('stats'));
    }
}
