@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-5"></div>
        <form class="horizontal-form mt-4">
            <div class="card-header">
                <h3 class="card-title pt-3 font-weight-bold">DESTINATIONS</h3>
                @include('pages.includes.new_config', ['newconfiguration' => 'Add Destination', 'pageRoute' => 'config_destination.create'])
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="my-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px;">#</th>
                                        <th>Destination</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($destinations as $destination)
                                    <tr>
                                        <td class="text-center">{{$destination->id}}</td>
                                        <td>{{$destination->name}}</td>
                                        <td>
                                            <a href="{{ route('config_destination.edit', $destination->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> edit</a>
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