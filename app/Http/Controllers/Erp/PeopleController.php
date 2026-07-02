<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PeopleController extends Controller
{
    public function index()
    {
        $contacts = collect();

        if (Schema::hasTable('contacts')) {
            $contacts = DB::table('contacts')
                ->latest('id')
                ->limit(100)
                ->get();
        }

        return view('erp.people', compact('contacts'));
    }
}
