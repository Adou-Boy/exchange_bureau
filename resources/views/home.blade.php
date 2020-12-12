@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="small-box bg-primary">
                    <div class="inner text-light">
                        <h3>{{count($transactions)}}</h3>
                        <p>Total Transaction</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route('transaction.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="small-box bg-light">
                    <div class="inner text-primary">
                        <h3>{{count($sending_transactions)}}</h3>
                        <p>Sent Transactions</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer"><i class="fas fa-circle text-primary"></i></a>
                </div> 
            </div>

            <div class="col-md-3">
                <div class="small-box bg-light">
                    <div class="inner text-primary">
                        <h3>{{count($transactions) - count($sending_transactions)}}</h3>
                        <p>Received Transactions</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer"><i class="fas fa-circle text-primary"></i></a>
                </div> 
            </div>
        </div>

        <div class="card">
          <div class="card-header bg-light">
            <h3 class="card-title text-primary">TODAY</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Transaction</th>
                  <th>Amount</th>
                  <th style="width: 100px">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>TOTAL TRANSACTION</td>
                  <td class="font-weight-bold">{{ $today_amount }}</td>
                  <td class="font-weight-bold">{{count($today_transaction)}}</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>SENT</td>
                  <td class="font-weight-bold">{{ $today_sent_amount }}</td>
                  <td class="font-weight-bold">{{count($today_sent)}}</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>RECEIVED</td>
                  <td class="font-weight-bold">{{$today_amount - $today_sent_amount}}</td>
                  <td class="font-weight-bold">{{count($today_transaction) - count($today_sent)}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card">
          <div class="card-header bg-light">
            <h3 class="card-title text-primary">TODAY</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Transaction</th>
                  <th>Amount</th>
                  <th>Amount Sent</th>
                  <th>Amount Received</th>
                  <th style="width: 100px">Total</th>
                  <th style="width: 100px">Sent</th>
                  <th style="width: 100px">Received</th>
                </tr>
              </thead>
              <tbody>
                <?php $count = 0; ?>
                @foreach($services as $service)
                <tr>
                  <td>{{$service->id}}.</td>
                  <td>{{$service->name}}</td>
                  <td class="font-weight-bold">{{$transactionAmountPerServices[$count]}}</td>
                  <td class="font-weight-bold">{{ $transactionAmountPerSentServices[$count] }}</td>
                  <td class="font-weight-bold">{{ $transactionAmountPerServices[$count] - $transactionAmountPerSentServices[$count] }}</td>
                  <td class="font-weight-bold">{{ $transactionCountPerServices[$count] }}</td>
                  <td class="font-weight-bold">{{ $transactionCountPerSentServices[$count] }}</td>
                  <td class="font-weight-bold">{{ $transactionCountPerServices[$count] - $transactionCountPerSentServices[$count] }}</td>
                </tr>
                <?php $count = $count + 1; ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
@endsection
