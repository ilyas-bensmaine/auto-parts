<div class="w-full lg:w-3/5 bg-white mb-4">
    <div class="p-3 border-b border-solid border-grey-light ">
        <span class="text-lg font-bold">Home</span>
        <div class="float-right">
            Sort by
            <select wire:model="filter" class="border-solid border-grey-light form-select"
                aria-label="Default select example">
                <option value="" selected>{{__('One')}}</option>
                <option value="2">{{__('Two')}}</option>
                <option value="3">{{__('Three')}}</option>
                <option value="4">{{__('four')}}</option>
            </select>
        </div>
    </div>

    @foreach ($demands as $demand)
        @livewire('demand-post', ['demand' => $demand])        
    @endforeach



</div>
