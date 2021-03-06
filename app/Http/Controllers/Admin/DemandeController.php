<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Demande;
use App\Models\Etat;
use App\Models\Image;
use App\Models\Modele;
use App\Models\Piece;
use App\Models\Reponse;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\Wilaya;
use App\Notifications\ReponseChoosenNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return view('admin.demandes.create_demande')->with('categories' , Category::all())
                                                    ->with('subcategories' , Subcategory::all())
                                                    ->with('wilayas' , Wilaya::all())
                                                    ->with('etats' , Etat::all())
                                                    ->with('modeles' , Auth::user()->modeles)
                                                    ->with('marques' , Auth::user()->marques)
                                                    ;
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
        $data = [];
        array_push($data , [
           'user_id'  => Auth::id(),
           'wilaya_id'   => $request->wilaya          ,
           'etat_id'     => $request->etat            ,

        //    'deb_demande' => $request->deb_demande     ,
        //    'fin_demande' => $request->fin_demande     ,
           'note'       => $request->description
        ]);
        // dd($data[0]);
            DB::beginTransaction();
            try{
                $demande = Demande::create($data[0]);

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
                DB::commit();
            }
            catch (Exception $e) {
                DB::rollBack();
                dd($e);
            }
            // notify interresters
            //in the modele

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
    public function choose_reponse($id)
    {
        DB::beginTransaction();
        try{
                $reponse = Reponse::find($id);
                $reponse->update([ 'is_choosen' => 1]);
                $reponse->save();
                $reponse->Responder->notify(new ReponseChoosenNotification($reponse));
                DB::commit();
        }
        catch (Exception $e){
            DB::rollBack();
            dd($e);
        }

    }
    public function demande_seen($id){
        $demande = Demande::find($id);
        $demande->viewers()->sync([Auth::id()]);
        $demande->viewers()->where('user_id' , Auth::id())->update(['is_saved' => true]);
        $demande->update(['vue' => $demande->vue+1]);
    }
}
