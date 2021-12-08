<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Subcategory;
use App\Models\Subcategory2;
use Livewire\Component;

class NewDemandModal extends Component
{
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
        // dd($this->modeles);
    }



    public function store()
    {
        // $this->name = '';
        // $this->category = '';
        $this->emit('productStore');
    }


}
