<div>
    <form wire:submit.prevent="register">

        {{-- STEP 1 --}}

        
        @if ($currentStep == 1)
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">Etape 1/4 - Détails personnels </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" placeholder="Entrez votre prénom"
                                    wire:model="first_name">
                                <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" placeholder="Entrez votre nom"
                                    wire:model="last_name">
                                <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="phone">N° de téléphone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="phone" id="test" class="form-control"
                                        wire:model="phone" >                                    
                            </div>
                            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control"
                                        wire:model="email" >                                    
                            </div>
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                    </div>

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

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" placeholder="Entrez votre prénom"
                                wire:model="username">
                            <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" class="form-control" 
                                wire:model="password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">confirmer le mot de passe</label>
                            <input type="password" class="form-control" 
                                wire:model="confirm_password">
                            <span class="text-danger">@error('confirm_password'){{ $message }}@enderror</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
            <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep == 4)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif

        </div>

    </form>
    @push('js')
    <script>
    //     Money Euro
        $('[data-mask]').inputmask()
        $("#test").inputmask({
            mask: "0X 99 99 99 99",
            definitions: {'X': {validator: "5|6|7"}}
        });
    </script>
    @endpush
</div>

