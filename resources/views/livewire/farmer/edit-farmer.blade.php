<div>
    <form method="POST" wire:submit.prevent='formSubmit'>
        @csrf



        <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
            <div>
                <x-form-label>
                    <span>NIC *</span>
                    <x-form-input name="nic" wire:model="nic" />
                </x-form-label>
                <x-jet-input-error for="nic" />
            </div>

            <div>
                <x-form-label>
                    <span>Birthday </span>
                    <x-form-input name="birthday" wire:model="birthday" />
                </x-form-label>
                <x-jet-input-error for="birthday" />
            </div>
        </div>

        <div class="mb-3">
            <x-form-label>
                <span>Full Name *</span>
                <x-form-input name="name" wire:model="name" />
            </x-form-label>
            <x-jet-input-error for="name" />
        </div>

        <div class="mb-3">
            <x-form-label>
                <span>Business Name </span>
                <x-form-input name="business_name" wire:model="business_name" />
            </x-form-label>
            <x-jet-input-error for="business_name" />
        </div>

        <div class="mb-3">
            <x-form-label>
                <span>Address</span>
                <x-form-textarea name="address" wire:model="address"></x-form-textarea>
            </x-form-label>
            <x-jet-input-error for="address" />
        </div>

        <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">
            <div>
                <x-form-label>
                    <span>ASC *</span>
                    <x-form-select name="asc_id" wire:model="asc_id">


                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="asc_id" />
            </div>

            <div>
                <x-form-label>
                    <span>GS Divistion *</span>
                    <x-form-select name="gs_id" wire:model="gs_id" >


                        

                    </x-form-select>
                </x-form-label>
                <x-jet-input-error for="gs_id" />
            </div>
        </div>

        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2 mb-3">
            <div>
                <x-form-label>
                    <span>Telephone * </span>
                    <x-form-input name="telephone_1" wire:model="telephone_1" />
                </x-form-label>
                <x-jet-input-error for="telephone_1" />
            </div>

            <div>
                <x-form-label>
                    <span>Telephone *</span>
                    <x-form-input name="telephone_2" wire:model="telephone_2" />
                </x-form-label>
                <x-jet-input-error for="telephone_2" />
            </div>

            <div>
                <x-form-label>
                    <span>Email</span>
                    <x-form-input name="email" wire:model="email" />
                </x-form-label>
                <x-jet-input-error for="email" />
            </div>
        </div>

        <div class=" flex w-full justify-end mt-6">
            <x-btn-primary>Update Farmer</x-btn-primary>
    </form>

</div>
