@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <form class="horizontal-form mt-4">
            <div class="card-header">
                <h3 class="card-title pt-3 font-weight-bold">CURRENCY</h3>
                @include('pages.includes.new_config', ['newconfiguration' => 'Add Currency', 'pageRoute' => 'config_currency.create'])
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="my-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">#</th>
                                        <th>Currency</th>
                                        <!-- <th>Rate</th> -->
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($currencies as $currency)
                                    <tr>
                                        <td class="text-center">{{$currency->id}}</td>
                                        <td>{{$currency->name}}</td>
                                        <!-- <td>{{$currency->rate}}</td> -->
                                        <td>
                                            <a href="{{ route('config_currency.edit', $currency->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> edit</a>
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
