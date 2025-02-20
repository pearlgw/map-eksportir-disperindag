<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cities = Cities::withCount('eksportirs')->get();
        return view('index', compact('cities'));
    }
}
