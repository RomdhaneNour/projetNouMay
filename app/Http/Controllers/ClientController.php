<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=client::orderBy('created_at','desc')->get();
        return view('client.client',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('name', 'CIN', 'email', 'password');
        $client = Client::create($input); //Create Client table entry
        return back()->withmessage('client added');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        $data=[
            'name'=>$request->name,
            'CIN'=>$request->CIN,
            'email'=>$request->email
        ];
        DB::table('clients')->where('id',$request['id'])->update($data);
        return back()->withmessage('Client updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        $client=client::where('id',$request['id'])->first();
        
         if($client==null)
        {
            return back();
        }
        else{
           
        return view('client.updateclient',compact('client'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $client=Client::where('id',$request['id'])->first();
        if($client->delete()) { 
            return back()->with('message', 'Client deleted.'); 
                           }
    }
}
