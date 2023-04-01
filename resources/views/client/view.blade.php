@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif
<style>
    .card{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
    }
    .card-header{
        font-size: 40px;
        text-align: center;
        
    }
    .card-body{
        width: 100%;
        font-size: 40px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding-top: 50px;
    }
    .card a{
        text-decoration: none;
        color: blue;
    }
</style>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Client Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('clients.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Client Name</b></label>
            <div class="col-sm-10">
                {{ $client->client_name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Address</b></label>
            <div class="col-sm-10">
                {{ $client->Address }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Client Gender</b></label>
            <div class="col-sm-10">
                {{ $client->client_gender }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Phone Number</b></label>
            <div class="col-sm-10">
                {{ $client->phone_number }}
            </div>
        </div>
    </div>
</div>

@endsection('content')