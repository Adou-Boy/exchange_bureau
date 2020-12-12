@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <form class="horizontal-form mt-4">
            <div class="card-header bg-gradient-primary">
                <h3 class="card-title pt-3 font-weight-bold">TRANSFER TRANSACTION</h3>
                @include('pages.includes.new_config', ['newconfiguration' => 'New Transfer', 'pageRoute' => 'transaction.create'])
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="my-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sender Name</th>
                                        <th>Receiver Name</th>
                                        <th>Amount</th>
                                        <th>Exchange Rate</th>
                                        <th>TYPE</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->sender_name }}</td>
                                        <td>{{ $transaction->receiver_name }}</td>
                                        <td>{{ $transaction->currency . "-" . $transaction->amount }}</td>
                                        <td>{{ $transaction->exchange_rate }}</td>
                                        <td class="text-success">{{ $transaction->type }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success btn-sm "><i class="fas fa-eye"></i> view</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection