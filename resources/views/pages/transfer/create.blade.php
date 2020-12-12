@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <div class="row col-md-12 m-auto">
            <form action="{{ route('transaction.store') }}" method="post"  autocomplete="off" class="form-horizontal mt-4">
            @csrf
                <div class="card-header bg-gradient-primary">
                    <h3 class="card-title pt-3 font-weight-bold">TRANSFER TRANSACTION INFORMATION</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="row col-md-3">
                                <div class="form-group col-md-12">
                                    <label for="type">Transaction Type</label>
                                    <select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="input-type" required="true" aria-required="true">
                                        <option>Select type</option>
                                        <option value="SENDING">SENDING</option>
                                        <option value="RECEIVING">RECEIVING</option>
                                        @if ($errors->has('type'))
                                        <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="form-group col-md-12">
                                    <label for="service">Service</label>
                                    <select class="form-control{{ $errors->has('service') ? ' is-invalid' : '' }}" name="service" id="input-service" required="true" aria-required="true">
                                        <option>Select Service</option>
                                        @foreach($services as $service)
                                        <option value="{{$service->name}}">{{$service->name}}</option>
                                        @endforeach
                                        @if ($errors->has('service'))
                                        <span id="service-error" class="error text-danger" for="input-service">{{ $errors->first('service') }}</span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="destination">Destination</label>
                                    <select class="form-control{{ $errors->has('destination') ? ' is-invalid' : '' }}" name="destination" id="input-destination" required="true" aria-required="true">
                                        <option>Select Destination</option>
                                        @foreach($destinations as $destination)
                                        <option value="{{$destination->name}}">{{$destination->name}}</option>
                                        @endforeach
                                        @if ($errors->has('destination'))
                                        <span id="destination-error" class="error text-danger" for="input-destination">{{ $errors->first('destination') }}</span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="sender_name">Sender Name</label>
                                    <input type="text" class="form-control" name="sender_name" id="sender_name" placeholder="Enter Sender Name">
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="sender_telephone">Sender Telephone</label>
                                    <input type="text" class="form-control" name="sender_telephone" id="sender_telephone" placeholder="Enter Sender Telephone">
                                </div>
                            </div>
                            <!-- <div class="row col-md-2"></div> -->
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="receiver_name">Receiver Name</label>
                                    <input type="text" class="form-control" name="receiver_name" id="receiver_name" placeholder="Enter Receiver Name">
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="receiver_telephone">Receiver Telephone</label>
                                    <input type="text" class="form-control" name="receiver_telephone" id="receiver_telephone" placeholder="Enter Receiver Telephone">
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="form-group col-md-12">
                                    <label for="currency">Currency</label>
                                    <select class="form-control{{ $errors->has('currency') ? ' is-invalid' : '' }}" name="currency" id="input-currency" required="true" aria-required="true">
                                        <option>Select Currency</option>
                                        @foreach($currencies as $currency)
                                        <option value="{{$currency->name}}">{{$currency->name}}</option>
                                        @endforeach
                                        @if ($errors->has('currency'))
                                        <span id="currency-error" class="error text-danger" for="input-currency">{{ $errors->first('currency') }}</span>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="row col-md-3">
                                <div class="form-group col-md-12">
                                    <label for="exchange_rate">Exchange Rate</label>
                                    <input type="text" class="form-control" name="exchange_rate" id="exchange_rate" placeholder="Enter Exchange Rate">
                                </div>
                            </div>
                            <div class="row col-md-6">
                                <div class="form-group col-md-12">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        @include('pages.includes.back', ['backRoute' => 'transaction.index'])
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection