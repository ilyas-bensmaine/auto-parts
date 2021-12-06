<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepsRegistrationForm extends Component
{

    use WithFileUploads;

    public $first_name;
    public $last_name;

    public $username;

    public $email;
    public $phone="";

    public $password;
    public $confirm_password;

    public $frameworks = [];
    public $cv;
    public $terms;

    public $totalSteps = 2;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-steps-registration-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'first_name'=>'required|string',
                'last_name'=>'required|string',
                'phone'=>'required',
                'email'=>'required|email|unique:users',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'username'=>'required|string|unique:users',
                 'password'=>'required'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'frameworks'=>'required|array|min:2|max:3'
              ]);
        }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
            $this->validate([
                'cv'=>'required|mimes:doc,docx,pdf|max:1024',
                'terms'=>'accepted'
            ]);
        }

        $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        if($upload_cv){
            $values = array(
                "first_name"=>$this->first_name,
                "last_name"=>$this->last_name,
                "gender"=>$this->gender,
                "email"=>$this->email,
                "phone"=>$this->phone,
                "country"=>$this->country,
                "city"=>$this->city,
                "frameworks"=>json_encode($this->frameworks),
                "description"=>$this->description,
                "cv"=>$cv_name,
            );

            User::insert($values);
          //   $this->reset();
          //   $this->currentStep = 1;
          $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
          return redirect()->route('registration.success', $data);
        }
    }

}
