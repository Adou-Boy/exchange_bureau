@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-5"></div>

    <div class="row mt-4">
    <div class="card col-md-12">
        <div class="card-body">
        <div class="text-right mb-2">
            <a href="{{ route('transaction.index') }}" class="btn btn-sm btn-light text-primary"><i class="fas fa-arrow-left"></i> Back</a>
            <!-- <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-download"></i> Generate Report</a> -->
        </div>
        <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
            <div class="row">
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Exchange rate</span>
                    <span class="info-box-number text-center text-muted mb-0">{{$transaction->exchange_rate}}</span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Transaction amount</span>
                    <span class="info-box-number text-center text-muted mb-0">{{$transaction->amount}}</span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Total amount paid</span>
                    <span class="info-box-number text-center text-muted mb-0">{{$transaction->total_amount}}</span>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
                <h4>{{ $transaction->service }} </h4>
                <div class="post">
                    <div class="user-block">
                    <i class="img-circle img-bordered-sm fas fa-circle" ></i>
                        <span class="username">
                            <a href="#">{{$transaction->sender_name}}</a>
                        </span>
                        <span class="description">Telephone - {{$transaction->sender_telephone}}</span>
                    </div>
                    <!-- /.user-block -->

                    <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Sender - {{$transaction->created_at}}</a>
                    </p>
                </div>

                <div class="post clearfix">
                    <div class="user-block">
                    <i class="img-circle img-bordered-sm fas fa-circle"></i>
                    <span class="username">
                        <a href="#">{{$transaction->receiver_name}}</a>
                    </span>
                    <span class="description">Telephone - {{$transaction->receiver_telephone}}</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Receiver </a>
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
        
        
</div>
@endsection