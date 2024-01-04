<?php

namespace App\Http\Controllers;

use App\Models\RentLog;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function index()
    {
        $rentlogs = RentLog::all();
        return view('rentlog', ['rentlogs' => $rentlogs]);
    }
}
