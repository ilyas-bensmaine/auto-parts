<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\Reponse;
use App\Notifications\ReponseNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reponses.index');
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
        $demande = Demande::find($request->demande);
        $user = Auth::id();
        $reponse =  Reponse::create([
            'demande_id'=>$demande->id,
            'user_id'=>$user,
            'quantity_fourni' => $request->quantity_fourni,
            'disponibility' => $request->disponibility,
            'wilaya' => $request->wilaya,
            'prix_offert' => $request->prix_offertd
        ]);
        $demander = $demande->demander;
        $demander->notify(new ReponseNotification($reponse));

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
