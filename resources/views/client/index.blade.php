@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif
<style>
    .add{
        float: right;
        width: 80px;
        height: 30px;
        background-color: greenyellow;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 10px;
        padding-top: 10px;
      
    }
    .add a{
        color: black;
        font-family: sans-serif;
    }
    input{
        border: none;
        font-size: 40px;
        font-family: sans-serif;
        background-color: white;
    }
    a{
        text-decoration: none;
        font-family: sans-serif;
    }
    table{
        width: 100%;
        border: 1px solid black;
    }
    th,td{
        border: 1px solid black;
        font-size: 40px;
        font-family: sans-serif;
    }
</style>
<div class="card">
    <div class="card-header">
        <div class="row">
           <h2 style="font-size: 50px;text-align:center;"> Client Data </h2>
        </div>
        <div class="add">
            <a href="{{ route('clients.create') }} " class="btn btn-success btn-sm float-end"> Add </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Edit</th>
            </tr>
            @if(count($data) > 0)
                @foreach($data as $row)
                
                <tr> 
                    <td>{{ $row->client_name }}</td>
                    <td>{{ $row->Address }}</td>
                    <td>{{ $row->client_gender }}</td>
                    <td>{{ $row->phone_number }}</td>
                    <td>
                        <form action="{{ route('clients.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('clients.show', $row->id)  }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('clients.edit', $row->id)  }}" class="btn btn-warning btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
            

            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection