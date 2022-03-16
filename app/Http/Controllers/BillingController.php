<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    

    public function subscribe()
    {
        return Inertia::render('Billing/Subscribe');
    }

    public function plans()
    {
        return Inertia::render('Billing/Plans', [
            'plans' => Plan::where('name', '!=', 'Trial')->get()
        ]);
    }
}
