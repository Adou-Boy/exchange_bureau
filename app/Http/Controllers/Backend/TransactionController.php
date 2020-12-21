<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Transaction;
use App\Models\Models\Service;
use App\Models\Models\Destination;
use App\Models\Models\Currency;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('pages.transfer.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $destinations = Destination::all();
        $currencies = Currency::all();
        return view('pages.transfer.create', compact('services', 'destinations', 'currencies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currency = $request->input('currency');
        $amount = $request->input('amount');
        $exchange_rate = $request->input('exchange_rate');

        $transaction = new Transaction;
        $transaction->type = $request->input('type');
        $transaction->service = $request->input('service');
        $transaction->sender_name = $request->input('sender_name');
        $transaction->sender_telephone = $request->input('sender_telephone');
        $transaction->destination = $request->input('destination');
        $transaction->receiver_name = $request->input('receiver_name');
        $transaction->receiver_telephone = $request->input('receiver_telephone');
        $transaction->currency = $currency;
        $transaction->amount = $amount;
        $transaction->exchange_rate = $exchange_rate;
        if ($currency == 'CFA') {
            $transaction->total_amount = ($amount / 2000) * $exchange_rate;
        } else {
            $transaction->total_amount = $amount * $exchange_rate;
        }
        
        $transaction->save();

        return redirect()->route('transaction.index')->withSuccess("transfer successfully made");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.transfer.show', compact('transaction')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
