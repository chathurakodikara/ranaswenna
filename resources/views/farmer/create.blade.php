<x-app-layout>

    <div class="py-10">
        <div class=" max-w-4xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 ">
                <h3 class="font-bold text-gray-800 text-3xl flex-100 mb-4 pb-2 border-b border-gray-200 ">New Farmer
                </h3>

                <form method="POST" action="/farmers">
                    @csrf

                    <div class=" grid sm:grid-cols-2 grid:cols-1 gap-x-6 gap-y-3 mb-3 ">
                        <div>
                            <x-form-label>
                                <span>NIC *</span>
                                <x-form-input name="nic" value="{{ old('nic') }}" />
                            </x-form-label>
                            <x-jet-input-error for="nic" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Birthday </span>
                                <x-form-input name="birthday" value="{{ old('birthday') }}" />
                            </x-form-label>
                            <x-jet-input-error for="birthday" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Full Name *</span>
                            <x-form-input name="name" value="{{ old('name') }}" />
                        </x-form-label>
                        <x-jet-input-error for="name" />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Business Name </span>
                            <x-form-input name="business_name" value="{{ old('business_name') }}" />
                        </x-form-label>
                        <x-jet-input-error for="business_name" />
                    </div>

                    <div class="mb-3">
                        <x-form-label>
                            <span>Address</span>
                            <x-form-textarea name="address">{{ old('address') }}</x-form-textarea>
                        </x-form-label>
                        <x-jet-input-error for="address" />
                    </div>

                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-3 mb-3">
                        <div>
                            <x-form-label>
                                <span>ASC *</span>
                                <x-form-select name="asc_id">
                                    <option value="">-Select-</option>
                                    @foreach($asc as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="asc_id" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>GS Divistion *</span>
                                <x-form-select name="gs_id">
                                    <option value="">-Select-</option>

                                    <option value="1">Vavuniya</option>
                                    <option value="2">Mathale</option>

                                </x-form-select>
                            </x-form-label>
                            <x-jet-input-error for="gs_id" />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-2 mb-3">
                        <div>
                            <x-form-label>
                                <span>Telephone * </span>
                                <x-form-input name="telephone_1" value="{{ old('telephone_1') }}" />
                            </x-form-label>
                            <x-jet-input-error for="telephone_1" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Telephone *</span>
                                <x-form-input name="telephone_2" value="{{ old('telephone_2') }}" />
                            </x-form-label>
                            <x-jet-input-error for="telephone_2" />
                        </div>

                        <div>
                            <x-form-label>
                                <span>Email</span>
                                <x-form-input name="email" value="{{ old('email') }}" />
                            </x-form-label>
                            <x-jet-input-error for="email" />
                        </div>
                    </div>

                    <div class=" flex w-full justify-end mt-6">
                        <x-btn-primary>Create Farmer</x-btn-primary>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
