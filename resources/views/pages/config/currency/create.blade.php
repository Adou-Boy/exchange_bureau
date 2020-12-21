@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mt-5"></div>
    <form action="{{ route('config_currency.store') }}" method="POST"  autocomplete="off" class="form-horizontal mt-4">
        @csrf
        <div class="card-header">
            <h3 class="card-title pt-3 font-weight-bold">ADD CURRENCY</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="row col-md-6">
                        <div class="form-group col-md-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Currency Name">
                        </div>
                    </div>

                    <div class="row col-md-6">
                        <div class="form-group col-md-12">
                            <label for="rate">Rate</label>
                            <input type="text" class="form-control" name="rate" id="rate" placeholder="Enter Currency Rate">
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                @include('pages.includes.back', ['backRoute' => 'config_currency.index'])
            </div>
        </div>
    </form>
</div>
@endsection