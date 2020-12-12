<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Transaction;
use App\Models\Models\Service;
use Carbon\Carbon;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $services = Service::all();

        $transactions = Transaction::all();
        $sending_transactions = Transaction::where('type', 'SENDING')->get();
        $today_transaction = Transaction::whereDate('created_at', Carbon::today())->get();
        $today_sent = Transaction::whereDate('created_at', Carbon::today())->where('type', 'SENDING')->get();

        $today_amount = self::totalTransactionToday($today_transaction);
        $today_sent_amount = self::totalTransactionToday($today_sent);

        $transactionCountPerServices = [];
        $transactionCountPerSentServices = [];
        $transactionAmountPerServices = [];
        $transactionAmountPerSentServices = [];
        foreach($services as $service) {
            array_push($transactionCountPerServices, self::transactionPerService($service));
            array_push($transactionCountPerSentServices, self::transactionPerServiceSent($service));
            array_push($transactionAmountPerServices, self::transactionPerServiceAmount($service));
            array_push($transactionAmountPerSentServices, self::transactionPerServiceAmountSent($service));
        }

        return view('home', compact('transactions', 'sending_transactions', 'today_transaction', 'today_sent', 'today_amount',
         'today_sent_amount', 'services', 'transactionCountPerServices', 'transactionAmountPerServices',
        'transactionCountPerSentServices', 'transactionAmountPerSentServices'));
    }

    private function totalTransactionToday($results) {
        $total = 0;
        foreach($results as $result) {
            $total = $total + $result->total_amount;
        }

        return $total;
    }

    private function transactionPerService($value) {
        $query = Transaction::whereDate('created_at', Carbon::today())
        ->where('service', $value->name)->get();
        $count = 0;
        foreach($query as $q) {
            $count = $count + 1;
        }
        return $count;
    }

    private function transactionPerServiceSent($value) {
        $query = Transaction::whereDate('created_at', Carbon::today())
        ->where('service', $value->name)->where('type', 'SENDING')->get();
        $count = 0;
        foreach($query as $q) {
            $count = $count + 1;
        }
        return $count;
    }

    private function transactionPerServiceAmount($value) {
        $query = Transaction::whereDate('created_at', Carbon::today())
        ->where('service', $value->name)->get();
        $total = 0;
        foreach($query as $q) {
            $total = $total + $q->total_amount;
        }
        return $total;
    }

    private function transactionPerServiceAmountSent($value) {
        $query = Transaction::whereDate('created_at', Carbon::today())
        ->where('service', $value->name)->get();
        $total = 0;
        foreach($query as $q) {
            $total = $total + $q->total_amount;
        }
        return $total;
    }
}
