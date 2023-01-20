<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Log;

use App\Models\client;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        
        return view('admin.Clients',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create new Client
        $request->validate([
            'Name' => 'required',
            'Adresse' => 'required',
            'AccountType' => 'required',
            'AccountNumber' => 'required',
            'phone' => 'required',
            'Email' => 'required',
            ]);
            Client::create($request->all());
            
            return redirect('/admin/Clients')
            ->with('success','Client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        // Show edit page
        $client = Client::find($client)->first();
        return view('admin.Edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $id = $request->input('id');
        $client = Client::find($id);
        $client->name = $request->input('Name');
        $client->Adresse = $request->input('Adresse');
        $client->AccountType = $request->input('AccountType');
        $client->AccountNumber = $request->input('AccountNumber');
        $client->phone = $request->input('phone');
        $client->Email = $request->input('Email');
        
        if ($client->update()) {
            return redirect('/admin/Clients')
            ->with('success', 'Client updated successfully');
        }else
            return redirect('/admin/Clients')
            ->with('error', 'Ooooops error!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete client

        $client = Client::findOrFail($id);
        $client->delete();
    
        return redirect('/admin/Clients')
                        ->with('success','Client deleted successfully');
    }
}
