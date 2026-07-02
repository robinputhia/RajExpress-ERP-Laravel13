<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = collect();

        if (Schema::hasTable('transactions')) {
            $purchases = DB::table('transactions')
                ->where('type', 'purchase')
                ->latest('id')
                ->limit(100)
                ->get();
        }

        return view('erp.purchase', compact('purchases'));
    }
}
