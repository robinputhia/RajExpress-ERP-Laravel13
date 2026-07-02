<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SalesController extends Controller
{
    public function index()
    {
        $sales = collect();

        if (Schema::hasTable('transactions')) {
            $sales = DB::table('transactions')
                ->where('type', 'sell')
                ->latest('id')
                ->limit(100)
                ->get();
        }

        return view('erp.sales', compact('sales'));
    }
}
