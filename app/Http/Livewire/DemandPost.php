<?php

namespace App\Http\Livewire;

use App\Models\Etat;
use App\Models\Image as Picture;
use App\Models\Reponse;
use App\Models\Wilaya;
use App\Notifications\ReponseNotification;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Image;
use Livewire\WithFileUploads;

class DemandPost extends Component
{
    use WithFileUploads;


    public $demand;
    public $user;
    public $wilayas;
    public $etats;
    public $prix;
    public $heart;
    public $countHearts;

    public $countResponses;

    public $isDemandLiked;
    public $path;
    public $selectedWilayaOfDisponibility;
    public $selectedEtat;
    public $reponseImages=[];

    public function mount()
    {
        $this->countResponses = $this->demand->reponses()->count();
        $this->countHearts = $this->demand->viewers()->count();
        $this->isDemandLiked = auth()->user()->viewedDemandes->contains($this->demand->id);
        $this->selectedWilayaOfDisponibility = auth()->user()->wilaya->id;
        $this->wilayas = Wilaya::all();
        $this->etats = Etat::all();
    }

    public function FunctionName()
    {
        
    }

    public function render()
    {
        return view('livewire.demand-post');
    }

    public function liked()
    {
        $this->isDemandLiked = true;
        $this->countHearts = $this->countHearts + 1;
        auth()->user()->viewedDemandes()->toggle($this->demand->id);
    }
    
    public function disliked()
    {
        $this->isDemandLiked = false;
        $this->countHearts = $this->countHearts - 1;
        auth()->user()->viewedDemandes()->detach($this->demand->id);
    }

    public function updatedReponseImages()
    {
        $this->validate([
            'reponseImages.*'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        foreach ($this->reponseImages as $file){
            $img = Image::make($file->path());
            $img->fit(1080,720);
            $img->save($file->path());
        }
    }



    public function newOffer()
    {
        // $this->validate([
        //     "prix" => 'required',
        // ]);
        $user = Auth::id();




        DB::beginTransaction();
        try{
            $newReponse =  Reponse::create([
                'demande_id'=>$this->demand->id,
                'user_id'=>$user,
                'etat_id'=>$this->selectedEtat ?? null,
                'wilaya' => $this->selectedWilayaOfDisponibility,
                'prix_offert' => $this->prix
            ]);

            if($this->reponseImages){
                foreach($this->reponseImages  as $file)
                {                
                    $imagePath = $file->store('reponses');
                    $image = Image::make(Storage::get($imagePath))->encode('jpg', 100);
                    Storage::put($imagePath, $image);
                    $picture = new Picture();
                    $picture->url = $imagePath;
                    $newReponse->image()->save($picture);
                }
            }
            $demander = $this->demand->demander;
            $demander->notify(new ReponseNotification($newReponse));      
            DB::commit();
            //
            $this->countResponses = $this->demand->reponses()->count();
        }
        catch(Exception $e){
            DB::rollBack();
            dd($e);
        }


    }
}
