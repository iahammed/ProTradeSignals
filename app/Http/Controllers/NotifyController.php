<?php

namespace App\Http\Controllers;

use app\Events\MessageSent;
use App\Models\Notification;
use Inertia\Inertia;
use App\Models\Pair;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Traits\ExchangeApiClient;
use Illuminate\Support\Facades\Storage;

class NotifyController extends Controller
{
    use ExchangeApiClient;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notify()
    {
        return Inertia::render('Notify/Index', [
            'filters' => Request::all('pair'),
            'pairs' => Pair::with('pairtype')->filter(Request::only('pair'))->get(),
            'notifications' => Notification::latest()->paginate(10),
            'exchageRate' => isset(Request::only('pair')['pair']) ? $this->getLatestPrice(Request::only('pair')['pair']) : []
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Request::all());

        event(new MessageSent(Request::all()));
    }

    public function getLatestPrice($id = '')
    {
        $pair = Pair::findOrFail($id);

        $exchange = $this->getPrice($pair->base, $pair->symbol);

        return [
            'price' => $exchange,
            'base' => $pair->base,
            'symbol' => $pair->symbol
        ];
    }

    
}
