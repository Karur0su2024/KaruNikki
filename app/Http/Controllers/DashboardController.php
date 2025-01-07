<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $entries = auth()->user()->dailyEntries()
        ->orderBy('date', 'desc')
        ->get();

        return view('dashboard', compact('entries'));
    }

    public function entry($entry)
    {
        $entry = auth()->user()->dailyEntries()->findOrFail($entry);

        return view('daily-entry', compact('entry'));
    }
}
