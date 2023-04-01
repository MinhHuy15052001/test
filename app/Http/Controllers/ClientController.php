<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Client::latest()->paginate(10);
        return view('client.index',compact('data'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'Address' => 'required | max:255',
            'phone_number' =>'required|min:10|numeric'
        ]);
        $client = new Client;

            $client->client_name = $request->client_name;
            $client->Address = $request->Address;
            $client->client_gender = $request->client_gender;
            $client->phone_number = $request->phone_number;
        
        $client->save();

        return redirect()->route('clients.index')->with('success','Client Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('client.view',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'client_name' => 'required',
            'Address' => 'required | max:255',
            'phone_number' =>'required|min:10|numeric'
        ]);

        $client = Client::find($request->hidden_id);
            $client->client_name = $request->client_name;
            $client->Address = $request->Address;
            $client->client_gender = $request->client_gender;
            $client->phone_number = $request->phone_number;
        
        $client->save();

        return redirect()->route('clients.index')->with('success','Client Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Student Data deleted successfully');

    }
}
