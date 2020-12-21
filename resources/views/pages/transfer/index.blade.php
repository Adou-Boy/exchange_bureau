@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <form class="horizontal-form mt-4">
            <div class="card-header bg-gradient-default">
                <h3 class="card-title pt-3 font-weight-bold">TRANSACTIONS</h3>
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
                                        <th>Paid Amount</th>
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
                                        <td>{{ $transaction->total_amount }}</td>
                                        <td class="text-info">{{ $transaction->type }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                        <td>
                                            <a href="{{ route('transaction.show', $transaction->id) }}" class="btn btn-primary btn-sm "><i class="fas fa-folder"></i> view</a>
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