<?php

namespace App\Http\Controllers;

use App\stagiaire;
use App\PFE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stagiaire=stagiaire::orderBy('created_at','desc')->get();
       return view('stagiaire.geststagiaire',compact('stagiaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PFE $pfe)
    {    $pfe=PFE::orderBy('created_at','desc')->get();
        return view ('stagiaire.ajout',compact('pfe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $stagiaire=new stagiaire();
       $stagiaire->nom=$request['nom'];
       $stagiaire->prenom=$request['prenom'];
       $stagiaire->email=$request['email'];
       $stagiaire->id_pfe=$request['pfe'];
       $stagiaire->msg=$request['msg'];
       $stagiaire->cv=$request['cv'];
       $stagiaire->save();
       return back()->withMessage('stagiaire ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function show(stagiaire $stagiaire , Request $request)
    {
        $stagiaire=stagiaire::where('id',$request['id'])->first();
        return view('stagiaire.showsta',compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       $data=[
           'nom'=>$request['nom'],
           'prenom'=>$request['prenom'],
           'email'=>$request['email'],
           'id_pfe'=>$request['pfe'],
           'msg'=>$request['msg'],
           'cv'=>$request['cv']
       ];
       DB::table('stagiaires')->where('id',$request['id'])->update($data);
       return back()->withmessage('updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stagiaire $stagiaire, PFE $pfe)
    {   $pfe=PFE::orderBy('created_at','desc')->get();
        $stagiaire=stagiaire::where('id',$request['id'])->first();
        if($stagiaire==null)
        {
            return back();
        }else
        {
               return view('stagiaire.modifier',compact('stagiaire','pfe'));
        }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stagiaire  $stagiaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(stagiaire $stagiaire , Request $request)
    {
        $stagiaire=stagiaire::where('id',$request['id'])->first();
        $stagiaire->delete();
        return back();
    }
}
