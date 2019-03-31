<?php

namespace App\Http\Controllers;

use App\projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets=projet::orderBy('created_at','desc')->get();
        return view('projet.projet',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('quantite', 'prixtotal', 'datedebut', 'datefin', 'domaine');
        $projet = Projet::create($input); //Create Project table entry
        return back()->withmessage('projet added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        $data=[
            'quantite'=>$request->quantite,
            'prixtotal'=>$request->prixtotal,
            'datedebut'=>$request->datedebut,
            'datefin'=>$request->datefin,
            'domaine'=>$request->domaine
        ];
        DB::table('projets')->where('id',$request['id'])->update($data);
        return back()->withmessage('Project updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projet $projet)
    {
        $projet=projet::where('id',$request['id'])->first();
        
         if($projet==null)
        {
            return back();
        }
        else{
           
        return view('projet.updateprojet',compact('projet'));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $projet=Projet::where('id',$request['id'])->first();
        if($projet->delete()) { 
            return back()->with('message', 'Project deleted.'); 
       }
    }
}