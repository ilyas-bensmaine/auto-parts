<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form wire:submit.prevent="register">

                {{-- STEP 1 --}}

                <style>
                    label {
                        width: 100%;
                        font-size: 1rem;
                    }

                    .card-input-element+.card {
                        height: calc(36px + 2*1rem);
                        color: var(--primary);
                        -webkit-box-shadow: none;
                        box-shadow: none;
                        border: 2px solid transparent;
                        border-radius: 4px;
                    }

                    .card-input-element+.card:hover {
                        cursor: pointer;
                    }

                    .card-input-element:checked+.card {
                        border: 2px solid var(--primary);
                        -webkit-transition: border .3s;
                        -o-transition: border .3s;
                        transition: border .3s;
                    }

                    .card-input-element:checked+.card::after {
                        /* content: '\e5ca';
                        color: #AFB8EA;
                        font-family: 'Material Icons'; */
                        font-size: 24px;
                        -webkit-animation-name: fadeInCheckbox;
                        animation-name: fadeInCheckbox;
                        -webkit-animation-duration: .5s;
                        animation-duration: .5s;
                        -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    }

                    @-webkit-keyframes fadeInCheckbox {
                        from {
                            opacity: 0;
                            -webkit-transform: rotateZ(-20deg);
                        }

                        to {
                            opacity: 1;
                            -webkit-transform: rotateZ(0deg);
                        }
                    }

                    @keyframes fadeInCheckbox {
                        from {
                            opacity: 0;
                            transform: rotateZ(-20deg);
                        }

                        to {
                            opacity: 1;
                            transform: rotateZ(0deg);
                        }
                    }

                </style>

                @if ($currentStep == 1)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">Etape 1/5 - Détails personnels </div>
                        <div class="progress mb-1">
                          <div class="progress-bar bg-success" role="progressbar"
                               aria-valuemax="100" style="width: 20%">
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">{{__('Prenom')}}</label>
                                        <input type="text" class="form-control" placeholder="Entrez votre prénom"
                                            required wire:model="firstName">
                                        <span class="text-danger">@error('firstName'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">{{__('Nom')}}</label>
                                        <input type="text" class="form-control" placeholder="Entrez votre nom"
                                            required wire:model="lastName">
                                        <span class="text-danger">@error('lastName'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="mobile"> {{__('N° de téléphone')}} </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="mobile" id="test" placeholder="0X XX XX XX XX" class="form-control" required wire:model="mobile">
                                    </div>
                                    <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>{{__('Wilaya')}}</label>
                                    <select class="form-control" wire:model="selectedWilaya" required>
                                        <option value="">{{__('Selectionez votre wilaya')}}</option>
                                        @foreach ($wilayas as $wilaya)
                                        <option value=" {{$wilaya->id}} ">{{$wilaya->code}} - {{$wilaya->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('selectedWilaya'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="commune">{{__('Commune')}}</label>
                                    <select class="form-control" wire:model="selectedWilaya" @if(count($communes) == 0) disabled @endif>
                                        <option value="">{{__('Selectionez votre commune')}}</option>
                                        @foreach ($communes as $commune)
                                        <option value=" {{$commune->id}} ">{{$commune->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-row d-flex justify-content-center bg-white pt-2 pb-2">
                          <button type="button" class="btn btn-md btn-secondary mx-auto" wire:click="decreaseStep()" disabled> <i class="fa fa-angle-left" aria-hidden="true"></i> {{__('Retour')}}</button>
                          <button type="submit" class="btn btn-md btn-primary mx-auto" wire:click="increaseStep()"> {{__('Suivant')}} <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
                        </div>
                    </div>
                </div>
                @endif

                {{-- STEP 2 --}}

                @if ($currentStep == 2)
                <div class="step-two">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                        <div class="card-body">
                            Ces informations seront utilisées pour vous permettre de vous connecter à notre plateforme.

                            <div class="row mt-3">
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type1">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type2">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                            </div>

                            <div class="row">
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type3">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type4">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                            </div>

                            <div class="row">
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type5">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                              <label class="col-md-6">
                                <input wire:model="type" type="radio" name="demo" class="card-input-element d-none" value="type6">
                                <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                  {{__('Selectionez votre commune')}}
                                </div>
                              </label>
                            </div>

                        </div>
                        <div class="card-footer d-row d-flex justify-content-center bg-white pt-2 pb-2">
                          <button type="button" class="btn btn-md btn-secondary mx-auto" wire:click="decreaseStep()"> <i class="fa fa-angle-left" aria-hidden="true"></i> {{__('Retour')}}</button>
                          <button type="submit" class="btn btn-md btn-primary mx-auto" @if($type == "") disabled @endif wire:click="increaseStep()"> {{__('Suivant')}} <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
                        </div>
                    </div>
                </div>
                @endif
                {{-- STEP 3 --}}

                @if ($currentStep == 3)

                <div class="step-two">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                        <div class="card-body">
                            Ces informations seront utilisées pour vous permettre de vous connecter à notre plateforme.
                            <section class="content pb-3">
                                <div class="container-fluid h-100">
                                    <div class="card-body row justify-content-center">
                                        <div class="card card-info card-outline">
                                            <div class="card-header">
                                              <h5 class="card-title">Create Labels</h5>
                                              <div class="card-tools">
                                                <a href="#" class="btn btn-tool btn-link">#3</a>
                                                <a href="#" class="btn btn-tool">
                                                  <i class="fas fa-pen"></i>
                                                </a>
                                              </div>
                                            </div>
                                            <div class="card-body">
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="card card-info card-outline">
                                            <div class="card-header">
                                              <h5 class="card-title">Create Labels</h5>
                                              <div class="card-tools">
                                                <a href="#" class="btn btn-tool btn-link">#3</a>
                                                <a href="#" class="btn btn-tool">
                                                  <i class="fas fa-pen"></i>
                                                </a>
                                              </div>
                                            </div>
                                            <div class="card-body">
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="card card-info card-outline">
                                            <div class="card-header">
                                              <h5 class="card-title">Create Labels</h5>
                                              <div class="card-tools">
                                                <a href="#" class="btn btn-tool btn-link">#3</a>
                                                <a href="#" class="btn btn-tool">
                                                  <i class="fas fa-pen"></i>
                                                </a>
                                              </div>
                                            </div>
                                            <div class="card-body">
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="card card-info card-outline">
                                            <div class="card-header">
                                              <h5 class="card-title">Create Labels</h5>
                                              <div class="card-tools">
                                                <a href="#" class="btn btn-tool btn-link">#3</a>
                                                <a href="#" class="btn btn-tool">
                                                  <i class="fas fa-pen"></i>
                                                </a>
                                              </div>
                                            </div>
                                            <div class="card-body">
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" >
                                                <label for="customCheckbox1" class="custom-control-label">Bug</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" >
                                                <label for="customCheckbox2" class="custom-control-label">Feature</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" >
                                                <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" >
                                                <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" >
                                                <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="card-footer d-row d-flex justify-content-center bg-white pt-2 pb-2">
                          <button type="button" class="btn btn-md btn-secondary mx-auto" wire:click="decreaseStep()"> <i class="fa fa-angle-left" aria-hidden="true"></i> {{__('Retour')}}</button>
                          <button type="submit" class="btn btn-md btn-primary mx-auto" @if($type == "") disabled @endif wire:click="increaseStep()"> {{__('Suivant')}} <i class="fa fa-angle-right" aria-hidden="true"></i> </button>
                        </div>
                    </div>
                </div>
                @endif

                {{-- STEP 4 --}}
                @if ($currentStep == 4)
                <div class="step-two">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                        <div class="card-body">
                            Ces informations seront utilisées pour vous permettre de vous connecter à notre plateforme.

                            <div class="row mt-4">
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" id="demo1">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Categorie 1
                                        <img src="{{ asset('img/demarrage.png') }}" alt="demarrage">
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" id="demo1">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Categorie 2
                                        <img src="{{ asset('img/demarrage.png') }}" alt="demarrage">
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" id="demo1">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Categorie 3
                                        <img src="{{ asset('img/demarrage.png') }}" alt="demarrage">
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" id="demo1">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Categorie 4
                                        <img src="{{ asset('img/demarrage.png') }}" alt="demarrage">
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                                <label class="col-md-3">
                                    <input type="checkbox" name="demo" class="card-input-element d-none" value="demo2">
                                    <div
                                        class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                        Organization 2
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                @if ($currentStep == 5)
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">{{__('Etape 5/5 - Informations de connexion et de sécutité')}} </div>
                        <div class="progress mb-1">
                            <div class="progress-bar bg-success" role="progressbar"
                                 aria-valuemax="100" style="width: 80%">
                            </div>
                        </div>
                        <div class="card-body">
                            Ces informations seront utilisées pour vous permettre de vous connecter à notre plateforme.

                            <div class="row gap-y align-items-center">
                                <div class="col-md-6 text-center text-md-left order-md-2">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="">Nom d'utilisateur</label>
                                                <input type="text" class="form-control" placeholder="Entrez votre nom d'utilisateur" required wire:model="username">
                                                <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="">Mot de passe</label>
                                                <input type="password" class="form-control" required wire:model="password">
                                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="">Confirm mot de passe</label> 
                                                <input type="password" class="form-control" required wire:model="passwordConfirm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-5 mx-auto p-8">
                                  <img class="img-circle elevation-2 mb-1" src=" {{asset('dist/img/avatar.png')}} " alt="profile picture">
                                  <div class="custom-file col-md-8">
                                    <input type="file" class="custom-file-input" id="customFile" wire:model="userImage"
                                        accept=".png, .jpg, .jpeg">
                                    <label class="custom-file-label" for="customFile">{{('Photo de profile')}}</label>
                                </div>
                                </div>
                    
                              </div>


                        </div>
                        <div class="card-footer d-row d-flex justify-content-center bg-white pt-2 pb-2">
                                <button type="button" class="btn btn-md btn-secondary mx-auto" wire:click="decreaseStep()"> <i class="fa fa-angle-left" aria-hidden="true"></i> {{__('Retour')}}</button>
                                <button type="submit" class="btn btn-md btn-primary mx-auto"> {{__('Submit')}} <i class="fa fa-check" aria-hidden="true"></i> </button>
                        </div>
                    </div>
                </div>
                @endif


                {{-- <div class="card-footer ">

                    @if ($currentStep == 1)
                    <div></div>
                    @endif

                    @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                    <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                    @endif

                    @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                    @endif

                    @if ($currentStep == 5)
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    @endif

                </div> --}}

            </form>
        </div>
    </div>
</div>



@push('js')
<script>
    //     Money Euro
    // $('[data-mask]').inputmask()
    // $("#test").inputmask({
    //     mask: "0X 99 99 99 99",
    //     definitions: {
    //         'X': {
    //             validator: "5|6|7"
    //         }
    //     }
    // });

</script>
@endpush
