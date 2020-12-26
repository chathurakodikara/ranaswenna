<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class=" font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">Add products
                    to market Place</h3>
                    <form method="POST" action="/myshop">
                        @csrf

                        <input type="hidden" value="0" name="organic">
                        <input type="hidden" value="0" name="transport">

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">

                        <div>
                            <x-form-label>
                                <span>Farmer's Nic *</span>
                                <x-form-input name="farmer_nic" placeholder="Search..." value="{{ old('farmer_nic') }}" />
                            </x-form-label>
                            <x-jet-input-error for="farmer_nic" />
                        </div>

                        <div class="col-span-2">
                            <x-form-label>
                                <span>Full Name</span>
                                <x-form-input
                                    class="form-input w-full bg-gray-100 focus:shadow-none focus:border-gray-100 border-gray-100"
                                    readonly value="{{ old('name') }}" />
                            </x-form-label>
                            <x-jet-input-error for="name" />
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">

                        <div>
                            <x-form-label>
                                <span>Product Category </span>
                                <x-form-select name="product_category">
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
                                <x-form-select name="items_id">
                                    <option value="">-Select-</option>
                                    @foreach($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="items_id" />
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">

                        <div>
                            <x-form-label>
                                <span>ASC Aria *</span>
                                <x-form-select name="asc_id">
                                    <option value="">-Select-</option>
                                    @foreach($ascs as $asc)
                                        <option value="{{ $asc->id }}">{{ $asc->name }}</option>
                                    @endforeach
                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="asc_id" />
                        </div>


                        <div>
                            <x-form-label>
                                <span>GS Divistion *</span>
                                <x-form-select name="gs_id" >
                                    <option value="">-Select-</option>
                                    @foreach($gss as $gs)
                                        <option value="{{ $gs->id }}">{{ $gs->name }}</option>
                                    @endforeach
                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="gs_id" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Product Description</span>
                            <x-form-textarea name="description" placeholder="Enter Product Description.">
                                {{ old('description') }}</x-form-textarea>
                        </x-form-label>
                        <x-jet-input-error for="description" />
                    </div>


                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-3">

                        <div>
                            <x-form-label>
                                <span>Unit *</span>
                                <x-form-select name="unit">
                                    <option value="Kg">Kg</option>
                                    <option value="Units">Units</option>

                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="unit" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>QTY *</span>
                                <x-form-input name="qty" value="{{ old('qty') }}" />
                            </x-form-label>
                            <x-jet-input-error for="qty" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Unit Price</span>
                                <x-form-input name="unit_price" placeholder="Rs" value="{{ old('unit_price') }}" />
                            </x-form-label>
                            <x-jet-input-error for="unit_price" />
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2 pt-2">

                        <div>
                            <x-form-label>
                                <x-form-checkbox class=" text-indigo-600" value="1" name="organic" />
                                <span>Organic product</span>
                            </x-form-label>
                        </div>

                        <div>
                            <x-form-label>
                                <x-form-checkbox class=" text-indigo-600" value="1" name="transport" />
                                <span>Transport Avalabe</span>
                            </x-form-label>
                        </div>
                    </div>


                    <div class=" flex w-full justify-end mt-6">
                        <x-btn-primary>Create</x-btn-primary>
                    </div>



                </form>
            </div>
        </div>
    </div>
</x-app-layout>
