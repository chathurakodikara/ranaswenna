<x-app-layout>
    <x-slot name="header">



    </x-slot>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200 ">New Farmer
                </h3>

                <form method="POST" action="/farmers">
                    @csrf

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-2 ">
                        <div>
                            <lable for="nic">NIC</lable>
                            <input class=" form-input w-full" id="nic" name="nic" type="text" value="{{ old('nic') }}">
                            <x-jet-input-error for="nic" />
                        </div>
                        <div>
                            <lable for="birthday">Birthday</lable>
                            <input class=" form-input w-full" id="birthday" name="birthday" type="text"
                                value="{{ old('birthday') }}">
                            <x-jet-input-error for="birthday" />
                        </div>
                    </div>

                    <div class="w-full mb-2">
                        <label for="name">Full Name </label>
                        <input class="form-input w-full" id="name" name="name" type="text" value="{{ old('name') }}">
                        <x-jet-input-error for="name" />
                    </div>

                    <div class="w-full mb-2">
                        <label for="business_name">Business Name</label>
                        <input class="form-input w-full" id="business_name" name="business_name" type="text"
                            value="{{ old('business_name') }}">
                        <x-jet-input-error for="business_name" />
                    </div>

                    <div class="w-full mb-2">
                        <lable for="address">Address</lable>

                        <textarea class="form-input w-full" id="address" name="address" type="text"
                            rows="3">{{ old('address') }}</textarea>
                        <x-jet-input-error for="address" />
                    </div>

                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-2">

                        <div>
                            <label for="asc_id">ASC </label>
                            <select class="form-select w-full" id="asc_id" name="asc_id">
                                {{-- @if ( old('asc_id') == )

                                    @endif --}}

                                <option value="">-Select-</option>
                                @foreach($asc as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                            </select>
                            <x-jet-input-error for="asc_id" />
                        </div>

                        <div>
                            <label for="gs_id"> GS Divistion </label>
                            <select class="form-select w-full" id="gs_id" name="gs_id">
                                {{-- @if ( old('gs_id') == )

                                    @endif --}}

                                <option value="">-Select-</option>
                                <option value="1">Vavuniya</option>
                                <option value="2">Mathale</option>
                            </select>
                            <x-jet-input-error for="gs_id" />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2 mb-2">
                        <div>
                            <label for="telephone_1"> Telephone * </label>
                            <input class="form-input w-full" id="telephone_1" type="text" name="telephone_1"
                                value="{{ old('telephone_1') }}">
                            <x-jet-input-error for="telephone_1" />
                        </div>
                        <div>
                            <label for="telephone_2"> Telephone </label>
                            <input class="form-input w-full" id="telephone_2" type="text" name="telephone_2"
                                value="{{ old('telephone_2') }}">
                            <x-jet-input-error for="telephone_2" />

                        </div>
                        <div class=" md:col-span-1  sm:col-span-2 ">
                            <label for="email"> Email </label>
                            <input class="form-input w-full" id="email" type="email" name="email"
                                value="{{ old('email') }}">
                            <x-jet-input-error for="email" />

                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-6">
                        <button
                            class=" bg-green-700 px-4 py-2 rounded focus:outline-none hover:bg-green-600 transition-colors duration-150 ease-in-out text-white font-bold leading-relaxed"
                            type="submit">
                            Create Farmer
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</x-app-layout>
