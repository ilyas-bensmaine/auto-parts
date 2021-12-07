<div class="modal-content">

    <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="fw-200 text-center mb-2">Login</h4>
        <p class="text-center mb-4">Sign into your account using your credentials.</p>
        <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="Username">
        </div>

        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>


        <div class="form-group" wire:ignore>
            <select id="category-dropdown" class="form-control" placeholder="Select input" multiple wire:model="category">
                <option value="">Select</option>
                <option value="1">Startup</option>
                <option value="2">Business</option>
                <option value="3">Enterprise</option>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Desc.." rows="3"></textarea>
        </div>
        <div class="row align-items-center pt-3 pb-5">
            <div class="col-auto">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox">
                    <label class="custom-control-label">Remember me</label>
                </div>
            </div>

            <div class="col text-right">
                <p class="mb-0 fw-300"><a class="text-muted small-2" href="#">Forgot password?</a></p>
            </div>
        </div>

        <button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>

        <div class="divider">Or sign in with</div>


    </div>

</div>

@push('js')
<script>
    $(document).ready(function () {
        $('#category-dropdown').select2();
        $('#category-dropdown').on('change', function (e) {
            let data = $(this).val();
            @this.set('category', data);
        });
        window.livewire.on('productStore', () => {
            $('#category-dropdown').select2();
        });
    });
</script>

@endpush
