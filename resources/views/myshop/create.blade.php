<x-app-layout>
    <x-slot name="header">


    </x-slot>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class=" font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200">Add products
                    to market Place</h3>
                <form method="POST" action=" ">
                    @csrf
                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="nic">Farmer's Nic</label>
                            <input id="searchfield" placeholder="Search..." autofocus="autofocus"
                                class="form-input w-full" value="{{ old('searchfield') }}">
                            <x-jet-input-error for="searchfield" />
                        </div>
                        <div class="col-span-2">
                            <label>Full Name</label>
                            <input
                                class="form-input w-full bg-gray-100 focus:shadow-none focus:border-gray-100 border-gray-100"
                                readonly value="{{ old('name') }}">
                            <x-jet-input-error for="name" />

                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="product_category">Product Category</label>
                            <select class="form-select w-full" id="product_category">
                                {{-- @if ( old('product_category') == )

                                    @endif --}}

                                <option value="">-Select-</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="product_category" />

                        </div>

                        <div>
                            <label for="title_id">Item</label>
                            <select class=" form-select w-full" id="title_id">
                                <option value="">-Select-</option>

                                @foreach($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                            <x-jet-input-error for="title_id" />
                        </div>
                    </div>
                    <div>
                        <label for="description">Product Description </label>
                        <textarea class=" form-textarea w-full" id="description" type="text" rows="3" name="description"
                            placeholder="Enter Product Description.">{{ old('description') }}</textarea>
                        <x-jet-input-error for="description" />
                    </div>
                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2">
                        <div>
                            <label for="unit">Unit</label>
                            <select class="form-select w-full" id="unit" name="unit">
                                <option value="Kg">Kg</option>
                                <option value="">Units</option>
                            </select>
                            <x-jet-input-error for="unit" />
                        </div>
                        <div>
                            <label for="qty">QTY</label>
                            <input class="form-input w-full" id="qty" type="text" name="qty">
                            <x-jet-input-error for="qty" />
                        </div>
                        <div>
                            <label for="unit_price">Unit Price</label>
                            <input class="form-input w-full" id="unit_price" type="text" name="unit_price"
                                placeholder="Rs">
                            <x-jet-input-error for="unit_price" />
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-6 gap-y-3 mb-2 pt-2">
                        <div>
                            <label class="inline-flex items-cente">
                                <input type="checkbox" class="form-checkbox h-6 w-6" name="organic">
                                <span class="ml-2 text-gray-700 text-sm font-bold ">Organic product </span>

                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-cente">
                                <input type="checkbox" class="form-checkbox h-6 w-6" name="transport">
                                <span class="ml-2 text-gray-700 text-sm font-bold">Transport Avalabe </span>
                            </label>
                        </div>
                    </div>


                    <div class=" flex w-full justify-end mt-6">
                        <button
                            class=" bg-green-700 px-4 py-2 rounded focus:outline-none hover:bg-indigo-600 transition-colors duration-150 ease-in-out text-white font-bold leading-relaxed"
                            type="submit">
                            Create Farmer
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
