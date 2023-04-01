@extends('master')

@section('content')
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
    <div class="card-header">Edit Client</div>
    <div class="card-body">
        <form method="post" action="{{ route('clients.update', $client->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Client Name</label>
                <div class="col-sm-10">
                    <input type="text" name="client_name" class="form-control" value="{{  $client->client_name }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Address</label>
                <div class="col-sm-10">
                    <input type="text" name="Address" class="form-control" value="{{ $client->Address }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Client Gender</label>
                <div class="col-sm-10">
                    <select name="client_gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Client Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" name="phone_number" class="form-control" value="{{ $client->phone_number }}" />
                    </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $client->id }}" />
                <input type="submit" class="btn btn-primary" value="Save" />
            </div>
        </form>
    </div>
</div>
<script>
document.getElementsByName('client_gender')[0].value = "{{ $client->client_gender }}";
</script>

@endsection('content')
