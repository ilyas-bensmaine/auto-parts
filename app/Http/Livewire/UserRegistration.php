<?php

namespace App\Http\Livewire;

use App\Models\Wilaya;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserRegistration extends Component
{
    // Multi form parametres
    public $currentStep=1;
    public $totalSteps =5;
    public $wilayas;
    public $selectedWilaya;

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

    public function increaseStep()
    {
        if($this->currentStep == 1){
            $this->validate([
                'username' => ['required', 'string', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);
            $this->currentStep = $this->currentStep + 1;
        }else{
            if($this->currentStep == 2){

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
