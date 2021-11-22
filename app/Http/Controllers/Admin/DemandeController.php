<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Modele;
use App\Models\Piece;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = Demande::all();
        return null;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.demandes.create_demande');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store the demande
        $data = [];
        $demander = $request->Auth::id();
        $piece    = Piece::find($request->piece);
        $deb      = $request->deb_demande;
        $fin      = $request->fin_demande;
        $note     = $request->note;
        array_push($data , [
           'user_id'  => $demander,
           'deb_demande' => $deb     ,
           'fin_demande' => $fin     ,
            'note'       => $note

        ]);
        if($deb){
            array_push($data , ['deb_demande' => $deb ]);}
        if($fin){
            array_push($data , ['fin_demande' => $fin ]);}
            DB::beginTransaction();
            try{
            $demande = Demande::create($data);
            $demande->pieces()->attach($piece);
            }
            catch (Exception $e) {
                DB::rollBack();
            }
            DB::commit();
            // notify interresters
            //in the modele
            if($request->modele){
                $inter = Modele::find($request->modele)->interresters;
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
