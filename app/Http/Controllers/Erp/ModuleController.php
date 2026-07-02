<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function show($title = 'Module')
    {
        return view('erp.module', compact('title'));
    }
}
