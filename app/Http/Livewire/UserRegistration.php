<?php

namespace App\Http\Livewire;

use App\Models\Wilaya;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserRegistration extends Component
{
    // Multi form parametres
    public $currentStep=2;
    public $totalSteps =5;
    public $wilayas;
    public $selectedWilaya;

    public $communes = [];
    public $selectedCommune;

    public $firstName;
    public $lastName;
    public $mobile;

    public $type= "";

    public $username;
    public $password;
    public $passwordConfirm;



    public function mount()
    {
        $this->wilayas = Wilaya::all();
    }

    
    public function render()
    {
        return view('livewire.user-registration');
    }


    public function updatedSelectedWilaya()
    {
        if($this->selectedWilaya){
            $this->communes = [];
        }else{
            $this->communes = [];
        }
    }

    public function updatedType()
    {
        // dd($this->type);
    }



    public function increaseStep()
    {
        if($this->currentStep == 1){
            $this->validate([
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'mobile' => ['required', 'string', 'max:10', 'min:10'],
                'selectedWilaya' => ['required'],
            ]);
            $this->currentStep = $this->currentStep + 1;
        }else{
            if($this->currentStep == 2){
                $this->currentStep = $this->currentStep + 1;
            }else{
                if($this->currentStep == 3){

                }else{
                    if($this->currentStep == 4){

                    }else{
                        $this->validate([
                            'username' => ['required', 'string', 'max:255', 'unique:users'],
                            'password' => ['required', 'string', 'min:6', 'confirmed'],
                        ]);
                    }
                }
            }
        }
    }

    public function decreaseStep()
    {
        $this->currentStep = $this->currentStep - 1;
    }

    public function register()
    {
        DB::beginTransaction();
        try{
            

            
            DB::commit();
        }
        catch (Exception $e) {
            dd($e);
            DB::rollBack();
        }
    }


}
