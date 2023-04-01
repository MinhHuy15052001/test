@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
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
    input{
        width: 400px;
        height: 50px;
        font-size: 30px;
    }

</style>
<div class="card">
    <div class="card-header">Add Client</div>
    <div class="card-body">
        <form method="post" action="{{ route('clients.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Client Name</label>
                <div class="col-sm-10">
                    <input type="text" name="client_name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Address</label>
                <div class="col-sm-10">
                    <input type="text" name="Address" class="form-control" />
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
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Client Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="phone_number" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
