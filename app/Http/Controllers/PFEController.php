<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\PFE;
use Illuminate\Http\Request;

class PFEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pfe=PFE::orderBy('created_at','desc')->get();
        return view('pfe.gestion_pfe',compact('pfe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pfe.addpfe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       
      $pfe=new PFE();
     
      $pfe->titre=$request['titre'];
      $pfe->sujet=$request['sujet'];
      $pfe->periode=$request['liste'];
      $pfe->nb_stagiaire=$request['nbpfe'];
      $pfe->save();
      return back()->withmessage('projet fin d etude ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PFE  $pFE
     * @return \Illuminate\Http\Response
     */
    public function show(PFE $pFE, Request $request)
    {
        $pFE=PFE::where('id',$request['id'])->first();
        if($pFE==null)
        {
            return back();
        }else
        {
               return view('pfe.showPfe',compact('pFE'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PFE  $pFE
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data=[
            'titre'=>$request->titre,
            'sujet'=>$request->sujet,
            'periode'=>$request->liste,
            'nb_stagiaire'=>$request->nbpfe
         ];
         DB::table('p_f_e_s')->where('id',$request['id'])->update($data);
         return back()->withmessage('updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PFE  $pFE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PFE $pFE)
    {
        $pFE=PFE::where('id',$request['id'])->first();
        if($pFE==null)
        {
            return back();
        }else
        {
               return view('pfe.updatePfe',compact('pFE'));
        }
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PFE  $pFE
     * @return \Illuminate\Http\Response
     */
    public function destroy(PFE $pFE , Request $request)
    {
        $pFE=PFE::where('id',$request['id'])->first();
        $pFE->delete();
        return back();
    }
}
