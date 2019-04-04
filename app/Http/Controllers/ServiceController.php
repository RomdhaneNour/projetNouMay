<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=service::orderBy('created_at','desc')->get();
        return view('service.service',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('name', 'description', 'pic');
        $service = Service::create($input); //Create Project table entry
        return back()->withmessage('service added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        $data=[
            'name'=>$request->name,
            'description'=>$request->description,
            'pic'=>$request->pic
        ];
        DB::table('services')->where('id',$request['id'])->update($data);
        return back()->withmessage('service updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $service=service::where('id',$request['id'])->first();
        
        if($service==null)
       {
           return back();
       }
       else{
          
       return view('service.updateservice',compact('service'));
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $service=Service::where('id',$request['id'])->first();
        if($service->delete()) { 
            return back()->with('message', 'Service deleted.'); 
       }
    }
}
