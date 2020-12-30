<div>
    <form method="POST" wire:submit.prevent='productSubmit'>
        @csrf

        <input type="hidden" value="0" wire:model="organic">
        <input type="hidden" value="0" wire:model="transport">

        <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">

            <div>
                <x-form-label>
                    <span>Farmer's Nic *</span>
                    <x-form-input wire:model.debounce.350ms="farmerNic" placeholder="Search..."  />
                </x-form-label>
                <x-jet-input-error for="farmerNic" />
            </div>

            <div class="col-span-2">
                <x-form-label>
                    <span>Full Name</span>
                    <x-form-input wire:model='farmerName'
                        class="form-input w-full bg-gray-100 focus:shadow-none focus:border-gray-100 border-gray-100"
                        readonly  />
                </x-form-label>
                <x-jet-input-error for="name" />
            </div>
        </div>

        <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">

            <div>
                <x-form-label>
                    <span>Product Category </span>
                    <x-form-select wire:model='product_category'>
                        <option value="">-Select-</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="product_category" />
            </div>


            <div>
                <x-form-label>
                    <span>Item *</span>
                    <x-form-select wire:model="item_id" >
                        <option value="">-Select-</option>
                        @foreach($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="item_id"/>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">

            <div>
                <x-form-label>
                    <span>ASC Aria *</span>
                    <x-form-select wire:model="asc_id">
                        <option value="">-Select-</option>
                        @foreach($ascs as $asc)
                            <option value="{{ $asc->id }}">{{ $asc->name }}</option>
                        @endforeach
                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="asc_id"/>
            </div>


            <div>
                <x-form-label>
                    <span>GS Divistion *</span>
                    <x-form-select wire:model="gs_id" >
                        <option value="">-Select-</option>
                        @foreach($gss as $gs)
                            <option value="{{ $gs->id }}">{{ $gs->name }}</option>
                        @endforeach
                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="gs_id"/>
            </div>
        </div>

        <div class="mb-3">
            <x-form-label>
                <span>Product Description</span>
                <x-form-textarea wire:model="description" placeholder="Enter Product Description."></x-form-textarea>
            </x-form-label>
            <x-jet-input-error for="description" />
        </div>

        <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-3">

            <div>
                <x-form-label>
                    <span>Unit *</span>
                    <x-form-select wire:model="unit">
                        <option value="">-Select-</option>

                        <option value="Kg">Kg</option>
                        <option value="Units">Units</option>

                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="unit" />
            </div>

            <div>
                <x-form-label>
                    <span>QTY *</span>
                    <x-form-input wire:model="qty"  />
                </x-form-label>
                <x-jet-input-error for="qty" />
            </div>


            <div>
                <x-form-label>
                    <span>Unit Price</span>
                    <x-form-input wire:model="unit_price" placeholder="Rs" />
                </x-form-label>
                <x-jet-input-error for="unit_price" />
            </div>
        </div>

        <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2 pt-2">

            <div>
                <x-form-label>
                    <x-form-checkbox class=" text-indigo-600" value="1" wire:model="organic"  />
                    <span>Organic product</span>
                </x-form-label>
            </div>

            <div>
                <x-form-label>
                    <x-form-checkbox class=" text-indigo-600" value="1" wire:model="transport" />
                    <span>Transport Avalabe</span>
                </x-form-label>
            </div>
        </div>


        <div class=" flex w-full justify-end mt-6">
            <x-btn-primary>Create</x-btn-primary>
        </div>

    </form>
</div>
