<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Demande;
use App\Models\Image as Picture;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Subcategory;
use App\Models\Subcategory2;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;
use Symfony\Component\Console\Input\Input;

class NewDemandModal extends Component
{
    use WithFileUploads;


    public $categories = [];
    public $subCategories = [];
    public $subSubCategories = [];
    public $marques = [];
    public $modeles = [];

    public $selectedCategory="";
    public $selectedSubCategory="";
    public $selectedSubSubCategory="";
    public $selectedMarque="";
    public $selectedModele="";

    public $note=[];

    public $demandImages= [];

    public function mount()
    {
        $this->categories = Category::all();
        $this->marques = Marque::all();
    }
    public function render()
    {
        return view('livewire.new-demand-modal');
    }



    public function updatedSelectedCategory()
    {
        if($this->selectedCategory){
            $this->subCategories = Subcategory::where('category_id', $this->selectedCategory)->get();
        }
    }

    public function updatedSelectedSubCategory()
    {
        if($this->selectedSubCategory){
            $this->subSubCategories = Subcategory2::where('subcategory_id', $this->selectedSubCategory)->get();
        }
    }
    public function updatedSelectedMarque()
    {
        if($this->selectedMarque){
            $this->modeles = Modele::where('marque_id', $this->selectedMarque)->get();
        }
    }

    public function updatedDemandImages()
    {
        $this->validate([
            'demandImages.*'=>'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        foreach ($this->demandImages as $file){
            $img = Image::make($file->path());
            $img->fit(1080,720);
            $img->save($file->path());
        }
    }

    public function addDemand()
    {
        $this->validate([
            "selectedCategory"=>'required',
            "selectedMarque"=>'required',
            "selectedModele"=>'required'
        ]);

        DB::beginTransaction();
        try{
            $newDemand = Demande::create([
                "user_id"=>auth()->user()->id,
                "wilaya_id"=>1,
                "etat_id"=>1,
                "note"=> $this->note
            ]);        
            if($this->demandImages){
                foreach($this->demandImages  as $file)
                {                
                    $imagePath = $file->store('demandes');
                    $image = Image::make(Storage::get($imagePath))->encode('jpg', 100);
                    Storage::put($imagePath, $image);
                    $picture = new Picture();
                    $picture->url = $imagePath;
                    $newDemand->images()->save($picture);
                }
            }
            $newDemand->categories()->attach($this->selectedCategory);
            $newDemand->subcategories()->attach($this->selectedSubCategory);
            $newDemand->marques()->attach($this->selectedMarque);
            $newDemand->modeles()->attach($this->selectedModele);
            DB::commit();
        }
        catch (Exception $e) {
            DB::rollBack();
        }
    }

}
