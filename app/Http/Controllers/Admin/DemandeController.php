<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Image;
use App\Models\Modele;
use App\Models\Piece;
use App\Models\Reponse;
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
        /**
         * basic infos of the demande:
         * ---- demander
         * ---- start and end
         * ---- etat de la piece demandé
         * ---- wilaya de la demande
         * notes + images
         */
        //create the demande

        //attach categories and sun categories

        //attach marques and modelels

        //notify the interresterss

        array_push($data , [
           'user_id'  => $request->Auth::id(),
           'wilaya_id'   => $request->wilaya          ,
           'etat_id'     => $request->etat            ,
           'deb_demande' => $request->deb_demande     ,
           'fin_demande' => $request->fin_demande     ,
           'note'       => $request->note

        ]);
            DB::beginTransaction();
            try{
                $demande = Demande::create($data);
                if($request->hasFile('images')){
                    //create pieces jointe
                    foreach($request->images  as $file)
                    {
                        $url = $file->store('images');
                        $im = new Image;
                        $im->url = $url;
                        $demande->images()->save($im);
                    }
                }
                $demande->categories()->attach($request->categories);
                $demande->subcategories()->attach($request->subcategories);
                $demande->marques()->attach($request->marques);
                $demande->modeles()->attach($request->modeles);

                $demande->notify_interresters();
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
    /**
     * choose a response by  the demander
     */
    public function choose_reponse(Reponse $reponse)
    {
        $reponse->update([ 'is_choosen' => 1]);
    }
}
