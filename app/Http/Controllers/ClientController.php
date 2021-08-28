<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{

  
   
    public function index()

    {
      

        $clientss = Client::all();
        return view("client.home",["clientss"=>$clientss]);
       
    }

   
    public function create()
    {
        $categories = Category::get();
        return view('client.insert',["categories"=>$categories]);
        
    }

  
    public function store(Request $request)
    {
        
        $request->validate([
            'client_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'status' => 'required',
            'category' => 'required',


        ]);
        $b = new Client();
        $b->client_name = $request->client_name;
        $b->address = $request->address;
        $b->contact = $request->contact;
        $b->time = $request->time;
        $b->status = $request->status;
        $b->category = $request->category;
        $b->save();
        return redirect()->back();



       
    }

    
    public function show(Client $client)
    {
      
    }

  
    public function edit(Client $client)
    {
    }

    
    public function update(Request $request, Client $client)
    {
       
    }

    
    public function destroy(Client $client)
    {
        
    }
}
